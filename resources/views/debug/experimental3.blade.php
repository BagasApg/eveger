<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>experimental</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    @php
        $produks = [['name' => 'Kentang', 'price' => 10000], ['name' => 'Ayam', 'price' => 20000], ['name' => 'Ikan', 'price' => 30000]];
    @endphp



    <div class="container p-5">

        <div class="card">
            <div class="card-header">
                Tes
            </div>
            <div id="rincian" class="card-body p-3">
                {{-- <div class="d-flex justify-content-between">

                    <p class="m-0">1. Kentang Korenk <span class="fw-bold">* 2</span></p>
                    <p class="m-0">Rp20.000</p>
                </div> --}}
            </div>
        </div>
        @foreach ($produks as $produk)
            {{-- <p>{{ $produk['name'] }}</p> --}}
            <div class="btn btn-primary mt-2" onclick="add('{{ $produk['name'] }}', {{ $produk['price'] }})">Add
                {{ $produk['name'] }}</div>
        @endforeach
        <div class="inputhere">

        </div>



    </div>
    <script>
        $(document).ready(function() {
            $('.inputhere').html(`
                <input type="number" name="total" id="total" min="1" data-inputid="1">
            
            `); 
        });

        $('#total').change(function(e) {
            e.preventDefault();
            console.log($(this).attr('data-inputid'))
        });

        var array_produk = []

        function add(id, name, price) {
            array_produk.push({
                'id': id,
                'name': name,
                'price': price
            })
            let divs = ''
            console.log(array_produk)
            $.each(array_produk, function(index, val) {
                // console.log(val.name + ' ' + val.price)
                divs += `<div class="d-flex justify-content-between">
                             <p class="m-0">${(index+1)} ${val.name} <span class="fw-bold">* 2</span></p>
                             <p class="m-0">Rp${val.price}</p>
                         </div>`
            });
            $('#delete_produk_' + id).toggleClass('d-none');
            $('#add_produk_' + id).toggleClass('d-none');
            $('#rincian').html(divs);
        }

        function del(id, name, price) {
            console.log(id)
            var index = id - 1
            array_produk.splice(array_produk.indexOf(id), 1)
            let divs = ''
            console.log(array_produk);
            $.each(array_produk, function(index, val) {
                console.log(val.name + ' ' + val.price)
                divs += `<div class="d-flex justify-content-between">
                             <p class="m-0">${(index+1)} ${val.name} <span class="fw-bold">* 2</span></p>
                             <p class="m-0">Rp${val.price}</p>
                         </div>`
            });
            $('#delete_produk_' + id).toggleClass('d-none');
            $('#add_produk_' + id).toggleClass('d-none');
            $('#rincian').html(divs);
            console.log(array_produk);
        }
    </script>


    {{-- <div class="p-3">
        <div id="add" class="btn btn-primary">Add</div>
    </div>

    <script>
      $('#add').click(function (e) { 
        e.preventDefault();
        $(this).toggleClass('btn-primary')
        $(this).toggleClass('btn-warning')
        $(this).attr('id', '#del');
      });

      $('#del').click(function (e) { 
        e.preventDefault();
        $(this).toggleClass('btn-primary')
        $(this).toggleClass('btn-warning')
        $(this).attr('id', '#add');
      });
    </script> --}}
</body>

</html>
