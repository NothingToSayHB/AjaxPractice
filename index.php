<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
    <title>Admin pannel</title>
</head>
<body>

<div class="container" style="margin-top: 30px;">

<div id="tableManager" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Country Name</h2>
            </div>

            <div class="modal-body">
                <div id="editContent">
                    <input type="text" class="form-control" placeholder="Country Name..." id="countryName"><br>
                    <textarea class="form-control" id="shortDesc" placeholder="Short Country Description"></textarea><br>
                    <textarea class="form-control" id="longDesc" placeholder="Long Country Description"></textarea><br>
                    <input type="hidden" id="editRowID" value="0">
                </div>

                <div id="showContent" style="display:none;">
                    <h3>Short Description</h3>
                    <div id="shortDescView"></div>
                    <hr>
                    <h3>Long Description</h3>
                    <div id="longDescView" style="overflow-y: scroll; height: 300px;"></div>
                </div>
            </div>

            <div class="modal-footer">
                <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="closeBtn" style="display: none;">
                <input type="button" id="manageBtn" onclick="manageData('addNew')" value="Save" class="btn btn-success">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>MySQL Table Manager</h2>

        <input style="float: right" type="button" class="btn btn-success" id="addNew" value="Add New">
        <br><br>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Country Name</td>
                    <td>Options</td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>
</div>
 
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type='text/javascript' src='./js/index.js'></script>
</body>
</html>