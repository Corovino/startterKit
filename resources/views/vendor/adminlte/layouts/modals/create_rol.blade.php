<div class="example-modal" >
         <div class="modal" id="modalRol">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">×</span></button>
                 <h4 class="modal-title">Crear rol</h4>
               </div>
               <div class="modal-body">
                 <div class="box box-warning">
                             
                             <!-- /.box-header -->
                             <div class="box-body">
                               <form role="form" lpformnum="2" _lpchecked="1" id="form">
                                 <!-- text input -->
                                 <div class="form-group">
                                   <label>Nombre del rol</label>
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                   <input type="text" name="rol" class="form-control" placeholder="Enter ..." style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">
                                 </div>
                                 <div class="form-group">
                                   <label>Slug</label>
                                   <input type="text" name="slug" class="form-control" placeholder="Enter ..." style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">
                                 </div>
                                 

                                 <!-- textarea -->
                                 <div class="form-group">
                                   <label>Descripción</label>
                                   <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                                 </div>
                                 

                                

                               </form>
                             </div>
                             <!-- /.box-body -->
                           </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                 <button type="button" id="createRol" onclick="Rol.roles();" class="btn btn-primary">Crear</button>
               </div>
             </div>
             <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
       </div>