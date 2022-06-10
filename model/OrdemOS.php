<?php 
   
   public class OrdemServico {

   	   private $numeroOS;
   	   private $dataEntrada;
   	   private $previsaoSaida;
   	   private $cliente;
   	   private $contato;
   	   private $endereco;
   	   private $equipamento;
   	   private $marca;
   	   private $modelo;
   	   private $numeroSerie;
   	   private $acessorios;
   	   private $defeito;
   	   private $observacoes;


//Getters
     function getNumeroOS() {
        return $this-> numeroOS;
  }

     function getDataEntrada() {
        return $this-> dataEntrada;
  }

     function getPrevisaoSaida() {
        return $this-> previsaoSaida;
  }

      function getCliente() {
        return $this-> cliente;
  }

      function getContato() {
        return $this-> contato;
  }

      function getEndereco() {
        return $this-> endereco;
  }

      function getEquipamento() {
        return $this-> equipamento;
  }

      function getMarca() {
        return $this-> marca;
  }

      function getModelo() {
        return $this-> modelo;
  }

      function getNumeroSerie() {
        return $this-> numeroSerie;
  }

      function getAcessorios() {
        return $this-> acessorios;
  }

      function getDefeito() {
        return $this-> defeito;
  }

      function getObservacoes() {
        return $this-> observacoes;
  }
  

// Setters 
     function setNumeroOS($nOs) {
        $this-> numeroOS = $nOS;
  }

     function setDataEntrada($dataE) {
        $this-> dataEntrada = $dataE;
  }

     function setPrevisaoSaida($prevS) {
        $this-> previsaoSaida = $prevS;
  }

      function setCliente($cli) {
        $this-> cliente = $cli;
  }

      function setContato($ctt) {
        $this-> contato = $ctt;
  }

      function setEndereco($end) {
        $this-> endereco = $end;
  }

      function setEquipamento($equip) {
        $this-> equipamento = $equip;
  }

      function setMarca($marc) {
        $this-> marca = $marc;
  }

      function setModelo($modl) {
        $this-> modelo = $modl;
  }

      function setNumeroSerie($nS) {
        $this-> numeroSerie = $nS;
  }

      function setAcessorios($acss) {
        $this-> acessorios = $acss;
  }

      function setDefeito($dft) {
        $this-> defeito = $dft;
  }

      function setObservacoes($obs) {
        $this-> observacoes = $obs;
  }
  

   }

?>