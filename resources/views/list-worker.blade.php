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

<div class="container">
  <h2>Dolgotzók listája</h2>
 
  <table class="table">
    <thead>
      <tr>
        <th>Név</th>
        <th>Lakhely</th>
        <th>Születési dátum</th>
        <th>Fizetés</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $workers as $worker )
            <tr>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->city }}</td>
                <td>{{ $worker->borndate }}</td>
                <td>{{ $worker->salary }}</td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
    
</body>
</html>