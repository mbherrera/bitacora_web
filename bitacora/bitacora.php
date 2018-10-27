<?php
class bitacora {
    var $codigo,$empresa,$titulo,$descripcion,$ultmod;
    
    function getDatos($c,$e,$t,$d,$u){
        $this ->codigo = $c;
        $this ->empresa = $e;
        $this ->titulo = $t;
        $this ->descripcion = $d;
        $this ->ultmod = $u;
    }
    
    function codigo_bitacora(){
        return $this ->codigo;
    }
    function empresa_bitacora(){
        return $this ->empresa;
    }
    function titulo_bitacora(){
        return $this ->titulo;
    }
    function descripcion_bitacora(){
        return $this ->descripcion;
    }
    function ultmod_bitacora(){
        return $this ->ultmod;
    }
}
?>