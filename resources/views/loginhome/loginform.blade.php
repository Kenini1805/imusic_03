      <div id="loginhome" class="modal fade" role="dialog" login="">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <form role="form" id="Login" action="{{asset('auth/login')}}" method="POST" novalidate="novalidate">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="login">
                     <div class="modal-header modal-header-login">
                        <button type="button" class="close" data-dismiss="modal"><i class="flaticon-delete"></i></button>
                     </div>
                     <div class="header-login">
                        <ul class="list-logo">
                           <li><a href="home" title=""><img src="https://st.mix166.com/html/images/logo.png"></a></li>
                        </ul>
                     </div>
                     <div class="login-content">
                        <div class="form-group text-info">
                           <input type="text" class="form-control text valid" id="email" name="email" placeholder="EMAIL OR PHONE" aria-invalid="false">
                        </div>
                        <div class="form-group text-info">
                           <input type="password" class="form-control text" id="password" name="password" placeholder="PASSWORD">
                        </div>
                        <div class="form-group">
                           <ul class="notes">
                              <li class="note-1">
                                 <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forgot_password">Forgot password ?</a>
                              </li>
                              <li class="note-2">
                                 <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#mix_register">Create new account</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="footer-login">
                        <div class="form-group">
                           <button type="submit" class="btn btn-login">Login</button>
                        </div>
                        <div class="form-group">
                        <a href="redirect/facebook">
                           <button type="button" class="btn btn-login-fb"><i class="fa fa-facebook"></i>FB Login</button>
                        </a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>