<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" aria-label="">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">
                        <img src="{{ asset('dist/img/logo/big-logo.png') }}" alt="png">
                        <br><br>
                        <br>
                        <h5 class="nameCafe">
                            Side Lake Cafe
                        </h5>
                    </div>
                    <a class="nav-link" href="">
                        <div class="sb-nav-link-icon"></div>
                        Menu Cafe
                    </a>
                    <a class="nav-link" href="">
                        <div class="sb-nav-link-icon"></div>
                        {{-- Product Cafe --}}
                    </a hidden>
                    <a class="nav-link" href="">
                        <div class="sb-nav-link-icon"></i></div>
                        {{-- Stock Up Cafe --}}
                    </a hidden>
                    <a class="nav-link" href="">
                        <div class="sb-nav-link-icon"></i></div>
                        {{-- Stock Down Cafe --}}
                    </a hidden>
                </div>

            </div>
            <div class="buttonLogout justify-content-lg-center d-flex m-3 p-4">
                <button type="button" class="btn btn-danger" onclick="window.location.href='{{route('kasirLogout')}}'">Logout</button>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Barista
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Bill’s</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
            </div>
        </div>
        <main>
            <div id="dialog">
                <h2>Order Berhasil</h2>
            </div>
            <div id="dialog1">
                <h2>Nama Customer Tidak Boleh Kosong</h2>
            </div>
            <!-- Layout menu -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <h1 class="mt-4">Menu Side Lake Cafe</h1>
                        <div class="col-md-6" id="menu-left">
                            <h3> Drink menu </h3>
                            <div id="menu-items"></div>
                        </div>
                        <div class="col-md-6" id="menu-right" style="background-color: #d9d9d9;">
                            <h3> Bill's </h3>
                            <input type="text" name="customer" id="customer" placeholder="Customer" style="width: 100%; border-radius: 5px; border: none; padding: 5px;">
                            <br><br><br>
                            <div id="items"></div>
                            <hr>
                            <div id="total"></div>
                            <br><br><br>
                            <h5>Payment Methode :</h5>
                            <center>
                                <div>
                                    <label for="payment">
                                        <div class="">
                                            <input type="radio" name="payment" value="Qrcode">
                                            <img src="{{ asset('dist/img/asset/QR.jpeg') }}" alt="jpeg" class="gambar_qr">
                                            <span class="checkmark"></span>
                                            <p>QR Code</p>
                                        </div>
                                    </label>
                                    <label for="payment">
                                        <div class="">
                                            <input type="radio" name="payment" value="Cash">
                                            <img src="{{ asset('dist/img/asset/money-icon.png') }}" alt="jpeg" class="gambar_qr">
                                            <span class="checkmark"></span>
                                            <p>Cash</p>
                                        </div>
                                    </label>
                                </div>
                            </center>
                            <center>
                                <Button class="btn btn-primary" id="order-btn">
                                    Order
                                </Button>
                            </center>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
                <!-- end layout -->
            </div>

        </main>
    </div>
</div>
