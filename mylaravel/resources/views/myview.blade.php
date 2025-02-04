

<h1>สูตรคูณ</h1>
<?php echo $value_id; ?>
{{$value_id;}}{{$myinput}}

<form action="{{url('/mycontroller')}}" 
    method="post"> 
    @csrf
 <body>
<div class="container mt-3">
        <form method="post" action="">
                <div class="container mt-3">
                    <div class="mb-2 row">
                        <div class="col-2">

                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <textarea name="detail" class="form-control" id="textarea" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
        </form>
    </div>
    
        <div class="container mt-5">
        <?php
        $detail = isset($_POST['detail']) ? $_POST['detail'] : 0;
        ?>
        <h2>สูตรคูณ : <?php echo $detail ?></h2>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "$detail x $i = ",($detail * $i),"<br>";
        }
        ?>
    </div>
</body>