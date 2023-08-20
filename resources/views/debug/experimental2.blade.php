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
    <div class="container p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><input type="number" name="qty" id="qty" min="1"></td>
                    <td class="subtotals">10000</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><input type="number" name="qty" id="qty" min="1"></td>
                    <td class="subtotals">10000</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><input type="number" name="qty" id="qty" min="1"></td>
                    <td class="subtotals">10000</td>
                </tr>
                
            </tbody>
        </table>

        <div class="card">
            <div class="card-body">
                Total : <span>1000</span>
            </div>
        </div>
    </div>

    <script>


        $(document).ready(function () {
            const subtotals = document.querySelectorAll('.subtotals');

            var total = 0
            console.log(subtotals);
            $.each(subtotals, function (indexInArray, elem) { 
                console.log(elem.childNodes[0].data)
                total += parseFloat(elem.childNodes[0].data);
            });

            console.log(total);
        });
    </script>
</body>

</html>
