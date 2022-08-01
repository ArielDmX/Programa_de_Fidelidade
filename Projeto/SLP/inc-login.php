<div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close btn" data-dismiss="modal"><span>×</span></button>
     </div>
     <div class="modal-body">
      <form method="post" class="form-group" action="action_login.php">
        <div class="form-group d-flex justify-content-center">

          <input type="email" class="form-control col-md-10 col-sm-12" placeholder="E-mail" id="email" name="email" required="required">

        </div>

        <div class="form-group d-flex justify-content-center mb-0">

          <input type="senha" class="form-control col-md-10 col-sm-12" placeholder="Senha" id="senha" name="senha" required="required">

        </div>

        <div class="ml-md-5">
          <small><u><a class="" href="">Esqueci minha senha</a></u></small>
        </div>

        <div class="form-group text-center pt-3">

          <input type="submit" class="btn btn-primary px-4 py-2" value="Entrar"></p>

        </div>
      </form>
    </div>
    <div class="modal-footer">
     Não tem cadastro?<a href="cadastro.php">&nbsp;<u>Cadastre-se</u></a>
   </div>
 </div>
</div>
</div>

<script type="text/javascript">
 $("#btn-mensagem").click(function(){
  $("#modal-mensagem").modal();
});
</script>