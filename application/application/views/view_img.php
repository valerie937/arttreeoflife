<!-- <div class="container">    <div style="margin-top: 13%;" class=" artistHeader page-header">      <h1>Meet the artist</h1>    </div></div> --><!-- <div class="panel panel-default profile"> -->  <!-- <div class="panel-body"> -->    <!-- <div class="container-fluid"> -->      <!-- <div class="row"> -->               <?php                 // echo $query->num_rows();               echo '<div class="container">';               echo '<div style="margin-top: 13%;" class=" artistHeader page-header">';               echo '<h1>Meet the artist</h1>';               echo '</div>';               echo '</div>';               echo '<div class="panel panel-default profile">';               echo ' <div class="panel-body">';               echo '<div class="container-fluid">';               echo '<div class="row">';               for( $i = 0 ; $i < $query->num_rows() ; $i++ ){              $row = $query->row_array($i);               // echo $row['workLink_img2'];                                             // for()              // echo '<div class="row"';              echo '<div class="col-md-4">';              echo '<div class="thumbnail">';              //    PROFILE IMG               echo '<img class=" img-circle" src="'.$row['profile_img'].'" alt=""></img>';              echo '<div class="caption">';              //  NAME               echo '<h3 class="artistName">'.$row['first_name'].' '.$row['last_name'].'</h3>';              echo '<p><a class="button btn btn-primary " id="hello" role="button" data-toggle="modal" data-target="#myModal" data-artist="'.$row['last_name'].'">Words</a>';              echo '</div>';              echo '</div>';              echo "</div>";              // echo "</div>";              // Modal              // Modal content              echo '<div id="myModal" class="modal fade" role="dialog">';              echo '<div class="modal-dialog modal-lg">';               echo '<div class="modal-content">';              echo '<div class="modal-header">';              echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';              // GET NAME FROM DB              echo '<h4 class="modal-title">'.$row['first_name'].' '.$row['last_name'].'  </h4>';              echo '</div>';              echo '<div class="modal-body">';              echo '<div class=" artistInfo containter-fluid">';              // LOAD PHP FILE              echo '</div>';              echo '</div>';              echo '<div class="modal-footer">';              echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';              echo '</div>';              echo '</div>';              echo '</div>';              echo '</div>';              // echo '</div>';              // echo '</div>';              // echo '</div>';              // echo '</div>';              // echo '</div>';              // echo '</div>';              // echo '</div>';              }              echo '</div>';              echo '</div>';              echo '</div>';              echo '</div>';              echo '</div>';              echo '</div>';              ?><!-- </div> --><!-- </div> --><!-- </div> --><!-- </div> --><!-- <div class="col-md-4">    <div class="thumbnail">      <img class='img-responsive' src="http://www.translationwebshop.com/wp-content/themes/translationwebshop/images/img_placeholder_avatar.jpg" alt="" class="img-rounded"></img>      <div class="caption">        <h3 class="artistName">Prof. Ken Jones</h3>        <p><a href="javascript:void(0);" class="button btn btn-primary " id="hello" role="button" data-toggle="modal" data-target="#myModal" data-artist="jones">Words</a>       </div>    </div>  </div></div> --><!-- Modal<! Modal content--><!-- <div id="myModal" class="modal fade" role="dialog">  <div class="modal-dialog modal-lg">    <div class="modal-content">      <div class="modal-header">        <button type="button" class="close" data-dismiss="modal">&times;</button> -->        <!-- GET NAME FROM DB -->        <!-- <h4 class="modal-title">Modal Header</h4>      </div>      <div class="modal-body">        <div class=" artistInfo containter-fluid"> --><!-- LOAD PHP FILE -->        <!-- </div>      </div>      <div class="modal-footer">        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      </div>    </div>  </div></div></div> --><script>$(document).ready(function(){     $(".button").one("click", function(){        $.ajax({          type: "POST",          url: "/Artists/modal",          data: ({lastname: $(this).attr("data-artist") }),          success: function(result){            $(".artistInfo").append(result);        }});    });  });             </script>