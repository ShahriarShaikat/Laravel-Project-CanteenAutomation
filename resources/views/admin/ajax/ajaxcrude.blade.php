<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax Crude</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="/css/ajaxcss.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>


<!-- Modal -->
<div class="modal fade thismodal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaltitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
                    
                    <input type="hidden" class="inputset" name="id">
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control input-sm inputset" type="text" name="fname" placeholder="First name">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control input-sm inputset" type="text" name="lname" placeholder="Last name">
                    </div>
                    <div class="form-group">
                      <label>E-mail</label>
                      <input class="form-control input-sm inputset" type="email" name="email" placeholder="Email">
                    </div>
                    
      </div>
                
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btnSave" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-primary btnUpdate" data-dismiss="modal">Update</button>
      </div>
    </div>
  </div>
</div>
<!-- end:Modal -->
    <div class="container">

        <div class="col-md-12">
            <div class="clearfix">
              <div class="alert alert-success messagebox" role="alert">
               <span class="sucmessage">A simple success alert—check it out!</span>
              </div>
                
              <br><br><br> <span>Laravel - jQuery CRUD</span><br><br>
                <button type="button" id="target" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Add New</button><br>
                <h3 align="center">Total Data : <span id="total_records"></span></h3>
            </div>

            <!--data listing table-->
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#Id</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col" colspan="2" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="tbodydata" >
                <!-- <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Edit</button></td>
                  <td class="text-center"><button type="button" class="btn btn-danger">Delete</button></td>
                </tr> -->
                
              </tbody>
            </table>
        </div>
    </div>

    <!-- modal -->
    <!-- <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">&times;
                    </button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control input-sm" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control input-sm" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control input-sm" type="text" name="phone">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-primary btnSave"
                            onClick="store()">Save
                    </button>
                    <button type="button" class="btn btn-primary btnUpdate"
                            onClick="update()">Update
                    </button>
                </div>
            </div>/.modal-content
        </div>/.modal-dialog
    </div>/.modal -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
      $(document).ready(function(){
        function reset() 
        {
          $('.inputset').val(null);
        }
        
        function getInputs() {
            var fname = $('input[name="fname"]').val();
            var lname = $('input[name="lname"]').val();
            var email = $('input[name="email"]').val();
            return {fname: fname, lname: lname, email: email}
        }
       fetch_customer_data();
      
       function fetch_customer_data()
       {
        $.ajax({
         url:"{{ route('fetch.data') }}",
         method:'GET',
         dataType:'json',
         success:function(datas)
         {
          $('.tbodydata').html(datas.table_data);
          //$('.tbodydata').html("<span>kk</span>");
          $('#total_records').text(datas.total_data);
         }
        });
       }
      
       $('#target').click(function(){
         $('.btnUpdate').hide();
         $('.btnSave').show();
         reset();
         $('#modaltitle').html('<span style="color:green;">Create User</span>');
       });

       $('.btnSave').click(function(){
        var datas = getInputs();
        console.log(datas);
            $.ajax({
                method: 'GET',
                url: "{{ route('ajax.store') }}",
                data: {datas:datas},
                dataType: 'json',
                success: function (res) {
                    console.log('inserted');
                    reset();
                    $('.thismodal').hide();
                    fetch_customer_data();
                    $('.messagebox').show();
                    $('.messagebox').fadeOut(6000);
                    $('.sucmessage').text(res.message);
                }
            })
        });
        $('table').on('click', '.dbtnbtndelete', function () {
        
          var id = $(this).attr('user');
          console.log(id);
          $.ajax({
                method: 'GET',
                url: "{{ route('ajax.crude.delete') }}",
                data: {id:id},
                dataType: 'json',
                success: function (res) {
                    console.log('deleted');
                    fetch_customer_data();
                    $('.messagebox').show();
                    $('.messagebox').fadeOut(6000);
                    $('.sucmessage').text(res.message);
                }
            })
        });
        $('table').on('click', '#ebtn', function () {
          reset();
        //var id = $(this).attr('pid');
        //console.log(id);
        $('.btnUpdate').show();
        $('.btnSave').hide();
        $('.thismodal').show();
        $('#modaltitle').html('<span style="color:green;">Update User Data</span>');
        var id = $(this).parent().parent().find('th').eq(0).text();
        var fname = $(this).parent().parent().find('td').eq(0).text();
        var lname = $(this).parent().parent().find('td').eq(1).text();
        var email = $(this).parent().parent().find('td').eq(2).text();
        $('input[name="id"]').val(id);
        $('input[name="fname"]').val(fname);
        $('input[name="lname"]').val(lname);
        $('input[name="email"]').val(email);
      });

      
      $('.btnUpdate').click(function(){
            var id = $('input[name="id"]').val();
            var frname = $('input[name="fname"]').val();
            var lrname = $('input[name="lname"]').val();
            var remail = $('input[name="email"]').val();
            var datas = {id: id, fname: frname, lname: lrname, email: remail};
            console.log(datas);
          $.ajax({
                method: 'GET',
                url: "{{ route('ajax.crude.edit') }}",
                data: {datas:datas},
                dataType: 'json',
                success: function (res) {
                    //console.log('Updated!');
                    reset();
                    $('.thismodal').hide();
                    fetch_customer_data();
                    $('.messagebox').show();
                    $('.messagebox').fadeOut(6000);
                    $('.sucmessage').text(res.message);
                }
            })
        });
      });
</script>

</body>
</html>