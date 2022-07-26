<?php

namespace App\Entity;

use App\Repository\PagamentosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PagamentosRepository::class)
 */
class Pagamentos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $cnpj_destino;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $conta_destino;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $agencia_destino;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $banco_destino;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codigo_barras;

    /**
     * @ORM\Column(type="float")
     */
    private $valor;

    /**
     * @ORM\Column(type="date")
     */
    private $vencimento;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $credencial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chave;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $forma_pagamento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCnpjDestino(): ?string
    {
        return $this->cnpj_destino;
    }

    public function setCnpjDestino(string $cnpj_destino): self
    {
        $this->cnpj_destino = $cnpj_destino;

        return $this;
    }

    public function getContaDestino(): ?string
    {
        return $this->conta_destino;
    }

    public function setContaDestino(?string $conta_destino): self
    {
        $this->conta_destino = $conta_destino;

        return $this;
    }

    public function getAgenciaDestino(): ?string
    {
        return $this->agencia_destino;
    }

    public function setAgenciaDestino(?string $agencia_destino): self
    {
        $this->agencia_destino = $agencia_destino;

        return $this;
    }

    public function getBancoDestino(): ?string
    {
        return $this->banco_destino;
    }

    public function setBancoDestino(?string $banco_destino): self
    {
        $this->banco_destino = $banco_destino;

        return $this;
    }

    public function getCodigoBarras(): ?string
    {
        return $this->codigo_barras;
    }

    public function setCodigoBarras(?string $codigo_barras): self
    {
        $this->codigo_barras = $codigo_barras;

        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getVencimento(): ?\DateTimeInterface
    {
        return $this->vencimento;
    }

    public function setVencimento(\DateTimeInterface $vencimento): self
    {
        $this->vencimento = $vencimento;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCredencial(): ?string
    {
        return $this->credencial;
    }

    public function setCredencial(string $credencial): self
    {
        $this->credencial = $credencial;

        return $this;
    }

    public function getChave(): ?string
    {
        return $this->chave;
    }

    public function setChave(string $chave): self
    {
        $this->chave = $chave;

        return $this;
    }

    public function getFormaPagamento(): ?string
    {
        return $this->forma_pagamento;
    }

    public function setFormaPagamento(string $forma_pagamento): self
    {
        $this->forma_pagamento = $forma_pagamento;

        return $this;
    }
}
