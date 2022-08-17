<?php

//fetch_item.php

include('connector.php');

$query = "SELECT * FROM produk WHERE id=$ID";

$statement = $koneksi->prepare($query);

if($statement->execute())
{
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-3" style="margin-top:12px;">  
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
             <img src="images/'.$row["foto_produk"].'" class="img-responsive" /><br />
             <h4 class="text-info">'.$row["nama_produk"].'</h4>
             <h4 class="text-danger">$ '.$row["harga_jual"] .'</h4>
             <input type="text" name="jumlah" id="jumlah' . $row["ID"] .'" class="form-control" value="1" />
             <input type="hidden" name="hidden_name" id="nama_produk'.$row["id"].'" value="'.$row["nama_produk"].'" />
             <input type="hidden" name="hidden_price" id="harga_jual'.$row["id"].'" value="'.$row["harga_jual"].'" />
             <input type="button" name="add_to_cart" id="'.$row["ID"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
        </div>
  ';
 }
 echo $output;
}


?>