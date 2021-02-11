<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
   
    <style>
    .navbar{
        background:grey;
    }
    .abc{
      display:none;
    }   
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?= base_url('css/a.png')?>" style="height:50px; width:50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('main') ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Time-Table
          </a>
          <ul class="dropdown-menu  text-center" aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider">High-School</li>
            <li><button class="dropdown-item" id="btn8" name="btn8" href="#">STD 8</button></li>
            <li><button class="dropdown-item" id="btn9" name="btn9" href="#">STD 9</button></li>
            <li><button class="dropdown-item" id="btn10" name="btn10" href="#">STD 10</button></li>
            <li><hr class="dropdown-divider">Higher-secondary</li>
            <li><button class="dropdown-item" id="btn11" name="btn11" href="#">STD 11</button></li>
            <li><button class="dropdown-item" id="btn12" name="btn12" href="#">STD 12</button></li>
          </ul>
        </li>
        </ul>
        <a href="<?= base_url('loggedout') ?>"><button class="btn btn-danger">Log Out</button></a>
        
      
      
    </div>
  </div>
</nav>

<table class="table abc" id="tab8">
    <thead>
      <tr>
        <th>STANDARD 8</th>
        <th>MONDAY</th>
        <th>TUESDAY</th>
        <th>WEDNESDAY</th>
        <th>THURSDAY</th>
        <th>FRIDAY</th>
        <th>SATURDAY</th>
      </tr>
    </thead>
      <tr>
        <th>08 TO 09</th>
        <td>HINDI</td>
        <td>ENGLISH</td>
        <td>GUJARATI</td>
        <td>SANSCRIT</td>
        <td>SCIENCE</td>
        <td>COMPUTER</td>
      </tr>
      <tr>
        <th>09 TO 10</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>10 TO 10:30</th>
        <td colspan="6" class="text-center">----------------------------------------RICESS----------------------------------------</td>
      </tr>
      <tr>
        <th>10:30 TO 11:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>11:30 TO 12:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <td colspan="7"><button id="cbtn" class="btn btn-danger">Close</button></td>
      </tr>
  </table>
    <table class="table abc" id="tab9">
    <thead>
      <tr>
        <th>STANDARD 9</th>
        <th>MONDAY</th>
        <th>TUESDAY</th>
        <th>WEDNESDAY</th>
        <th>THURSDAY</th>
        <th>FRIDAY</th>
        <th>SATURDAY</th>
      </tr>
      <tr>
        <th>08 TO 09</th>
        <td>HINDI</td>
        <td>ENGLISH</td>
        <td>GUJARATI</td>
        <td>SANSCRIT</td>
        <td>SCIENCE</td>
        <td>COMPUTER</td>
      </tr>
      <tr>
        <th>09 TO 10</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>10 TO 10:30</th>
        <td colspan="6" class="text-center">----------------------------------------RICESS----------------------------------------</td>
      </tr>
      <tr>
        <th>10:30 TO 11:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>11:30 TO 12:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <td colspan="7"><button id="cbtn1" class="btn btn-danger">Close</button></td>
      </tr>
    </table>

    <table class="table abc" id="tab10">
    <thead>
      <tr>
        <th>STANDARD 10</th>
        <th>MONDAY</th>
        <th>TUESDAY</th>
        <th>WEDNESDAY</th>
        <th>THURSDAY</th>
        <th>FRIDAY</th>
        <th>SATURDAY</th>
      </tr>
    </thead>
      <tr>
        <th>08 TO 09</th>
        <td>HINDI</td>
        <td>ENGLISH</td>
        <td>GUJARATI</td>
        <td>SANSCRIT</td>
        <td>SCIENCE</td>
        <td>COMPUTER</td>
      </tr>
      <tr>
        <th>09 TO 10</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>10 TO 10:30</th>
        <td colspan="6" class="text-center">----------------------------------------RICESS----------------------------------------</td>
      </tr>
      <tr>
        <th>10:30 TO 11:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>11:30 TO 12:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <td colspan="7"><button id="cbtn2" class="btn btn-danger">Close</button></td>
      </tr>
  </table>

  <table class="table abc" id="tab11">
    <thead>
      <tr>
        <th>STANDARD 11</th>
        <th>MONDAY</th>
        <th>TUESDAY</th>
        <th>WEDNESDAY</th>
        <th>THURSDAY</th>
        <th>FRIDAY</th>
        <th>SATURDAY</th>
      </tr>
    </thead>
      <tr>
        <th>08 TO 09</th>
        <td>HINDI</td>
        <td>ENGLISH</td>
        <td>GUJARATI</td>
        <td>SANSCRIT</td>
        <td>SCIENCE</td>
        <td>COMPUTER</td>
      </tr>
      <tr>
        <th>09 TO 10</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>10 TO 10:30</th>
        <td colspan="6" class="text-center">----------------------------------------RICESS----------------------------------------</td>
      </tr>
      <tr>
        <th>10:30 TO 11:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>11:30 TO 12:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <td colspan="7"><button id="cbtn3" class="btn btn-danger">Close</button></td>
      </tr>
  </table>

  <table class="table abc" id="tab12">
    <thead>
      <tr>
        <th>STANDARD 12</th>
        <th>MONDAY</th>
        <th>TUESDAY</th>
        <th>WEDNESDAY</th>
        <th>THURSDAY</th>
        <th>FRIDAY</th>
        <th>SATURDAY</th>
      </tr>
    </thead>
      <tr>
        <th>08 TO 09</th>
        <td>HINDI</td>
        <td>ENGLISH</td>
        <td>GUJARATI</td>
        <td>SANSCRIT</td>
        <td>SCIENCE</td>
        <td>COMPUTER</td>
      </tr>
      <tr>
        <th>09 TO 10</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>10 TO 10:30</th>
        <td colspan="6" class="text-center">----------------------------------------RICESS----------------------------------------</td>
      </tr>
      <tr>
        <th>10:30 TO 11:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <th>11:30 TO 12:30</th>
        <td>GUJARATI</td>
        <td>HINDI</td>
        <td>SANSCRIT</td>
        <td>ENGLISH</td>
        <td>COMPUTER</td>
        <td>SCIENCE</td>
      </tr>
      <tr>
        <td colspan="7"><button id="cbtn4" class="btn btn-danger">Close</button></td>
      </tr>
  </table>

<script>
    document.getElementById("btn8").addEventListener("click",function()
    {
        var box1=document.getElementById("tab8");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })
    document.getElementById("cbtn").addEventListener("click",function()
    {
        var box1=document.getElementById("tab8");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })

    document.getElementById("btn9").addEventListener("click",function()
    {
        console.log('btn =9  clicked');
        var box2=document.getElementById("tab9");
        console.log('tab9 box2 ', box2);
        if(box2.style.display=="block")
        {
          console.log('if');
            box2.style.display="none";
        }
        else
        {
          console.log('else');
            box2.style.display="block";
        }
    })
    document.getElementById("cbtn1").addEventListener("click",function()
    {
        var box2=document.getElementById("tab9");
        if(box2.style.display=="block")
        {
            box2.style.display="none";
        }
        else
        {
            box2.style.display="block";
        }
    })

    document.getElementById("btn10").addEventListener("click",function()
    {
        var box1=document.getElementById("tab10");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })
    document.getElementById("cbtn2").addEventListener("click",function()
    {
        var box1=document.getElementById("tab10");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })

    document.getElementById("btn11").addEventListener("click",function()
    {
        var box1=document.getElementById("tab11");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })
    document.getElementById("cbtn3").addEventListener("click",function()
    {
        var box1=document.getElementById("tab11");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })

    document.getElementById("btn12").addEventListener("click",function()
    {
        var box1=document.getElementById("tab12");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })
    document.getElementById("cbtn4").addEventListener("click",function()
    {
        var box1=document.getElementById("tab12");
        if(box1.style.display=="block")
        {
            box1.style.display="none";
        }
        else
        {
            box1.style.display="block";
        }
    })

    
    </script>


</script> 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
