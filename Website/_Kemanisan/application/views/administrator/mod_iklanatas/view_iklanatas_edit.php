<?php 
    echo "<div class='col-md-12'>
              <div class='box box-success' style='box-shadow: 0 0 10px rgba(0,0,0,.3); border-radius: 10px; overflow: hidden;'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Iklan Atas</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_iklanatas',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_iklanatas]'>
                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='a' value='$rows[judul]' required></td></tr>
                    <tr><th width='120px' scope='row'>Url</th>    <td><input type='url' class='form-control' name='b' value='$rows[url]' required></td></tr>
                    <tr><th width='120px' scope='row'>Status</th>    <td><select class='form-control' name='d' required>";
                                                                    $iklanatas = array('default','slide');
                                                                    for ($i=0; $i < count($iklanatas); $i++) { 
                                                                      if ($rows['username']==$iklanatas[$i]){
                                                                        echo "<option value='".$iklanatas[$i]."' selected>".$iklanatas[$i]."</option>";
                                                                      }else{
                                                                        echo "<option value='".$iklanatas[$i]."'>".$iklanatas[$i]."</option>";
                                                                      }
                                                                    }
                                                                     echo "</select></td></tr>
                    <tr><th width='120px' scope='row'>Gambar</th>    <td><input type='file' class='form-control' name='c'>";
                                                                        if ($rows['gambar'] != ''){ echo "Lihat Gambar : <a target='_BLANK' href='".base_url()."asset/foto_iklanatas/$rows[gambar]'>$rows[gambar]</a>"; } echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/iklanatas'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
