<div id="mix_register" class="modal fade" role="dialog" login="" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" action="{{ asset('/auth/register') }}" method="post">
                 {{ csrf_field() }}
                    <div class="header-login">
                        <ul class="list-logo">
                            <li><a href="#" title=""><img src="https://st.mix166.com/html/images/logo.png"></a></li>
                        </ul>
                    </div>
                    <div class="login-content">
                        <div class="form-group text-info">
                            <input type="email" class="form-control text" id="reg_email" name="email" placeholder="EMAIL" required>
                        </div>
                        <div class="form-group text-info">
                            <input type="text" class="form-control text" id="name" name="name" placeholder="FULL NAME" required>
                        </div>
                        <div class="form-group text-info">
                            <input type="password" class="form-control text" id="reg_password" name="password" placeholder="PASSWORD" required>
                        </div>
                        <div class="form-group text-info">
                            <input type="password" class="form-control text" id="reg_re_password" name="re_password" placeholder="RETYPE NEW PASSWORD" required>
                        </div>
                        <div class="form-group check-box" style="position: relative">
                            <input type="checkbox" id="agree">
                            <span style="position: absolute; left: 18px; top: 1px">Terms of Service and User Agreement</span>
                        </div>
                    </div>
                    <div class="footer-login">
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Create an account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>