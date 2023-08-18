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
    <div class="p-3">
        <div id="add" class="btn btn-primary">Add</div>
        <div id="add" class="btn btn-primary">Add</div>
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
    </script>
</body>

</html>
