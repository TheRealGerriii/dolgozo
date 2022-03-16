<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
    <h1>Dolgozó felvétele</h1>
        <!-- <form action="store-worker" method="post">
            @csrf
            <p>
                <label for=""> Név: </label>
                <input type="text" name="name">
                <br>
            </p>
            <p>
                <label for=""> Lakhely: </label>
                <input type="text" name="city">
                <br>
            </p>
            <p>
                <label for=""> Születési dátum: </label>
                <input type="text" name="borndate">
            </p>
            <p>
                <label for=""> Fizetés: </label>
                <input type="text" name="salary">
                <br>
            </p>
            <p>
                <button type="submit">Felvétel</button>
            </p>
        </form> -->

        <div class="container mb-3">
            <form  action="store-worker" method="post">
                @csrf
                <div class="mb-3">
                    <label for="InputName" class="form-label">Név: </label>
                    <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="InputCity" class="form-label">lakhely</label>
                    <input type="text" class="form-control" id="InputCity" name="city">
                </div>
                <div class="mb-3">
                    <label for="InputBornDate" class="form-label">Születési dátum: </label>
                    <input type="text" class="form-control" id="InputBornDate" aria-describedby="emailHelp" name="borndate">
                </div>
                <div class="mb-3">
                    <label for="InputSalary" class="form-label">Fizetés: </label>
                    <input type="text" class="form-control" id="InputSalary" aria-describedby="emailHelp" name="salary">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>


 
