<script src="{{asset('dist/js/kasir/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('dist/js/kasir/utils.js')}}"></script>
        <script>
            const formatter = Intl.NumberFormat("id-ID", {
                style : "currency",
                currency : "IDR"
            })
            let onData = [];
            let data = [];
            var dialog;
            var dialog1;

            dialog = $("#dialog").dialog({
                autoOpen : false,
                height : 500,
                witdh : 350,
                modal : true,
                buttons : {
                    Cancel : () => {
                        dialog.dialog("close")
                        location.reload()
                    }
                }
            })

            dialog1 = $("#dialog1").dialog({
                autoOpen : false,
                height : 500,
                witdh : 350,
                modal : true,
                buttons : {
                    Cancel : () => {
                        dialog1.dialog("close")
                    }
                }
            })

            onData.map((element, i) => {
                $("<div>", {
                    class : "row",
                    id : `order-${element.nama_menu}`,
                    html : `<div class="row">
                                <div class="col"><h5>${element.nama_menu}</h5></div>
                                <div class="col"><p>${formatter.format(element.harga)}</p></div>
                            </div>`
                }).click((e) => {
                    e.preventDefault()
                    $(`#order-${element.nama_menu}`).remove()
                }).appendTo($("#items"))
            })

            $("<div>", {
                class : "row",
                id : "total-price",
                html : `<div class="row">
                                <div class="col"><h5>Total's</h5></div>
                                <div class="col"><p>${formatter.format(totalHarga(onData))}</p></div>
                        </div>`
            }).appendTo($("#total"))

            $("#order-btn").click((e) => {
                e.preventDefault()

                var check = $('input[name="payment"]:checked').val()
                var customer_name = $("#customer").val()

                if (customer_name.length === 0) {
                    dialog1.dialog("open")
                    return;
                }

                $.ajax({
                    url : "https://attractive-wetsuit-pig.cyclic.app/api/v1/order",
                    method : "POST",
                    data : {
                        "orderCustomer" : customer_name,
                        "orderItem" : JSON.stringify(onData),
                        "orderPayment" : check
                    },
                    success : (data) => {
                        dialog.dialog("open")
                    }
                })
            })

            $.ajax({
                url : "http://localhost:8000/api/drinkProduk",
                method : "GET",
                async : true,
                crossDomain : true,
                success: (getData) => {
                    data = getData.data;

                    data.map((element, i) => {
                        $("<button>", {
                            class : "btn margin-item btn-secondary",
                            id : `${i}item`,
                            html : `<div class="row">
                                        <div class="col"><p>${element.nama_menu}</p></div>
                                        <div class="col"><p>${priceInK(element.harga)}</p></div>
                                    </div>`
                        }).click((e) => {
                            onData.push(element)
                            $("<div>", {
                                class : "row",
                                id : `order-${i}`,
                                html : `<div class="row">
                                            <div class="col"><h5>${element.nama_menu}</h5></div>
                                            <div class="col"><p>${formatter.format(element.harga)}</p></div>
                                        </div>`
                            }).click((e) => {
                                e.preventDefault()
                                $(`#order-${i}`).remove()
                                onData.pop(element)
                                $("#total-price").remove()
                            $("<div>", {
                                class : "row",
                                id : "total-price",
                                html : `<div class="row">
                                            <div class="col"><h5>Total's</h5></div>
                                            <div class="col"><p>${formatter.format(totalHarga(onData))}</p></div>
                                        </div>`
                                }).appendTo($("#total"))
                            }).appendTo($("#items"))


                            $("#total-price").remove()
                            $("<div>", {
                                class : "row",
                                id : "total-price",
                                html : `<div class="row">
                                            <div class="col"><h5>Total's</h5></div>
                                            <div class="col"><p>${formatter.format(totalHarga(onData))}</p></div>
                                        </div>`
                                }).appendTo($("#total"))
                        }).appendTo($("#menu-items"))
                    })
                },

            })
        </script>
