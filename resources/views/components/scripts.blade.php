<script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dist/vendor/splide/js/splide.min.js') }}"></script>
<script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $page = '@yield('title-2')';
    $(document).ready(function() {
        const lastUpdate = document.getElementsByClassName("lastUpdate");
        for (let i = 0; i < lastUpdate.length; i++) {
            lastUpdate[i].disabled = false;
        }

        if ($page == 'Stok') {
            $('#stok_table').DataTable({
                "paging": true, // enable pagination
                "pageLength": 10, // set the number of rows per page
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ] // provide options for the number of rows per page
            });

            //update stok_item
            $(document).on('click', 'button[data-role=updateStokData]', function() {
                let id = $(this).data("id");
                let nama_barang = $('#' + id).children('td[data-target=nama_barang]').text();
                let jml_stok = $('#' + id).children('td[data-target=jml_stok]').text();
                let expired = $('#' + id).children('td[data-target=expired]').text();

                $('#id').val(id);
                $('#nama_barang').val(nama_barang);
                $('#jml_stok').val(parseFloat(jml_stok));
                $('#expired').val(expired);
                $('#updateStokData').modal('toggle');
            });

            //delete stok_item
            $(document).on('click', 'button[data-role=deleteStokData]', function() {
                let id = $(this).data("id");
                let column = this;

                $.ajax({
                    type: "get",
                    url: "stok/deleteStok/" + id,
                    success: function() {
                        $(column).closest("tr").remove();
                    }
                })
            });
        }
    });
    if ($page == 'Product') {
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#slider1', {
                perPage: 4,
                pagenation: false,
                arrows: false
            }).mount();

            new Splide('#slider2', {
                perPage: 4,
                pagenation: false,
                arrows: false
            }).mount();

            $(document).on('click', 'button[data-role=updateMenuDrinkData]', function() {
                let id = $(this).data("id");
                let nama_menu = $('#' + id).children('[data-target=nama_menu]').text();
                let keterangan = $('#' + id).children('[data-target=keterangan]').text();
                let jml_stok = $('#' + id).children('[data-target=jml_stok]').text();

                $('#id').val(id);
                $('#nama_menu').val(nama_menu);
                $('#keterangan').val(keterangan);
                $('#jml_stok').val(parseFloat(jml_stok));
                $('#updateMenuDrinkData').modal('toggle');
            });

            $(document).on('click', 'button[data-role=deleteDrinkItem]', function() {
                let id = $(this).data("id");
                let card = this;

                $.ajax({
                    type: "get",
                    url: "produk/deleteDrinkItem/" + id,
                    success: function() {
                        $(card).closest(".splide__list").remove();
                    }
                })
            });

            $(document).on('click', 'button[data-role=updateMenuFoodData]', function() {
                let id = $(this).data("id");
                let nama_menu = $('#' + id).children('[data-target=nama_menu]').text();
                let keterangan = $('#' + id).children('[data-target=keterangan]').text();
                let jml_stok = $('#' + id).children('[data-target=jml_stok]').text();

                $('#id_food').val(id);
                $('#nama_menu_food').val(nama_menu);
                $('#keterangan_food').val(keterangan);
                $('#jml_stok_food').val(parseFloat(jml_stok));
                $('#updateMenuFoodData').modal('toggle');
            });

            $(document).on('click', 'button[data-role=deleteFoodItem]', function() {
                let id = $(this).data("id");
                let card = this;

                $.ajax({
                    type: "get",
                    url: "produk/deleteFoodItem/" + id,
                    success: function() {
                        $(card).closest(".splide__list").remove();
                    }
                })
            });
        });
    }

    if ($page == 'Data Kasir') {
        $('#kasir_table').DataTable({
                "paging": true, // enable pagination
                "pageLength": 10, // set the number of rows per page
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ] // provide options for the number of rows per page
            });

            //update kasir data
            $(document).on('click', 'button[data-role=updateKasirData]', function() {
                let id = $(this).data("id");
                let name = $('#' + id).children('td[data-target=name]').text();
                let email = $('#' + id).children('td[data-target=email]').text();

                $('#id').val(id);
                $('#name').val(name);
                $('#email').val(email);
                $('#updateKasirData').modal('toggle');
            });

            //delete stok_item
            $(document).on('click', 'button[data-role=deleteKasirData]', function() {
                let id = $(this).data("id");
                let column = this;

                $.ajax({
                    type: "get",
                    url: "kasir-data/hapusKasir/" + id,
                    success: function() {
                        $(column).closest("tr").remove();
                    }
                })
            });
    }
</script>
