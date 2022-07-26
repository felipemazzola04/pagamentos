<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Pagamentos;

use function json_encode;

class ApiController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public const FORM_CONTENT_TYPE = 'form';
    /**
     * @Route("/api/pagamentos/{credencial}/{chave}/", name="pagamentos_index", methods={"GET"})
     */
    public function index($credencial, $chave): Response 
    {
    
        $chave = hash('sha256', $chave);
        $pagamentos = $this->getDoctrine()->getRepository(Pagamentos::class)
                        ->findBy(['credencial' => $credencial, 'chave' => $chave], ['id' => 'DESC']);

        return $this->json(['data' => $pagamentos ]);
    }

    /**
     * @Route("/api/pagamentos/{credencial}/{chave}/{identificador}", name="pagamento_pagamentos", methods={"GET"})
     */
    public function pagamentos($credencial, $chave, $identificador): Response 
    {
    
        $chave = hash('sha256', $chave);
        $pagamentos = $this->getDoctrine()->getRepository(Pagamentos::class)
                       ->findBy(['id' => $identificador, 'credencial' => $credencial, 'chave' => $chave], ['id' => 'DESC']);

        return $this->json(['data' => $pagamentos ]);
    }

    /**
     * @Route("/api/pagamentos/{credencial}/{chave}", name="pagamento_create", methods={"POST"})
     */
    public function create(Request $request, $credencial, $chave): Response 
    {
    
        $data = $this->getRequestParams($request);
        $data = json_decode($data, true);
        $date = new \DateTime($data['vencimento']);

        $chave = hash('sha256', $chave);

        $pagamentos = new Pagamentos();
        $pagamentos->setValor($data['valor']);
        $pagamentos->setVencimento($date);
        $pagamentos->setCnpjDestino($data['cnpj_destino']);

        if ( isset($data['conta_destino']) ) {
            $pagamentos->setContaDestino($data['conta_destino']);
        }

        if ( isset($data['agencia_destino']) ) {
            $pagamentos->setAgenciaDestino($data['agencia_destino']);
        }

        if ( isset($data['banco_destino']) ) {
            $pagamentos->setBancoDestino($data['banco_destino']);
        }

        if ( isset($data['codigo_barras']) ) {
            $pagamentos->setCodigoBarras($data['codigo_barras']);
        }

        $pagamentos->setCredencial($credencial);
        $pagamentos->setChave($chave);
        $pagamentos->setFormaPagamento($data['tipo_pagamento']);
        $pagamentos->setStatus(0);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($pagamentos);
        $doctrine->flush();

        return $this->json(['msg' => 'Pagamento criada com sucesso.', 
                            'Indentificador' => $pagamentos->getId()]);
    }

        /**
     * @Route("/api/pagamentos/{credencial}/{chave}/{identificador}", name="pagamento_update", methods={"PUT"})
     */
    public function update(Request $request, $credencial, $chave, $identificador): Response 
    {
    
        $data = $this->getRequestParams($request);
        $data = json_decode($data, true);

        $chave = hash('sha256', $chave);
        $doctrine = $this->getDoctrine();

        $pagamentos = $doctrine->getRepository(Pagamentos::class)
                       ->findOneBy(['credencial' => $credencial, 'chave' => $chave, 'id' => $identificador]);

        if (isset($data['valor'])) {
            $pagamentos->setValor($data['valor']);
        }

        if (isset($data['vencimento'])) {
            $date = new \DateTime($data['vencimento']);
            $pagamentos->setVencimento($date);
        }

        if (isset($data['cpf_pagador'])) {
            $pagamentos->setCpfPagador($data['cpf_pagador']);
        }

        if (isset($data['taxa_juros'])) {
            $pagamentos->setTaxaJuros($data['taxa_juros']);
        }

        if (isset($data['taxa_multa'])) {
            $pagamentos->setTaxaMulta($data['taxa_multa']);
        }

        if (isset($data['valor_desconto'])) {
            $pagamentos->setValorDesconto($data['valor_desconto']);
        }

        if (isset($data['dias_desconto'])) {
            $pagamentos->setDiasDesconto($data['dias_desconto']);
        }

        if (isset($data['nome_pagador'])) {
            $pagamentos->setNomePagador($data['nome_pagador']);
        }

        if (isset($data['instrucao_caixa'])) {
            $pagamentos->setInstrucoesCaixa($data['instrucao_caixa']);
        }

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($pagamentos);
        $doctrine->flush();

        return $this->json(['msg' => 'Pagamento alterado com sucesso.', 
                            'Indentificador' => $pagamentos->getId()]);
    }

    /**
     * @Route("/api/pagamentos/{credencial}/{chave}/{identificador}", name="pagamento_delete", methods={"DELETE"})
     */
    public function delete($credencial, $chave, $identificador): Response
    {

        $chave = hash('sha256', $chave);
        $doctrine = $this->getDoctrine();

        $pagamentos = $doctrine->getRepository(Pagamentos::class)
                       ->findOneBy(['credencial' => $credencial, 'chave' => $chave, 'id' => $identificador]);
        
        $pagamentos->setStatus(-1);
        
        $doctrine = $doctrine->getManager();
        $doctrine->flush();

        return $this->json(['msg' => 'Pagamento invalidada com sucesso.']);
    }

        /**
     * @return resource|string|false
     */
    protected function getRequestParams(Request $request)
    {
    
        $body = $request->getContent();
        if ($request->getContentType() === self::FORM_CONTENT_TYPE) {
            $body = json_encode($request->request->all());
        }

        if (empty($body)) {
            $body = json_encode($request->query->all());
        }

        return $body;
    }
    


    
}
