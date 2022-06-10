<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown List</title>
</head>
<body>
    <div class="form-group">
      <label for="">Pilih Provinsi</label>
      <select name="province_id" id="province_id">
          <option disabled selected>Pilih Provinsi</option>
          <option value="aceh">Aceh</option>
          <option value="jabar">Jawa barat</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">Pilih Kota</label>
      <select name="city_id" id="city_id"></select>
    </div>

    <script>
        document.getElementById("province_id").addEventListener('change',function(){
            var provinceName    = document.getElementById("province_id").value;
            var url             = "http://localhost:8000/04/cities.php?province="+provinceName;
            fetch(url).then(response=>{
                response.json().then(rows => {
                    var s = document.getElementById('city_id');
                    rows.forEach(function(item,key){
                        s[key] = new Option(item,key);
                    });
                    console.log(url);
                })
            });
        });
    </script>
    
</body>
</html>