<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<style>
.datatablescenter {
    text-align: center;

}

.datatablesjustify {
    text-align: justify;

}

</style>

    <title>datatable test</title>
</head>
<body>

     <div class="container">

            <br/>

            <h1 class="text-center">Tax Exemption Receipt Text </h1>

            <br/> <br/>

            <table class="cell-border compact stripe" id="users-table">

               <thead>

                    <tr>

                        <th>Id</th>

                        <th>Project Name</th>

                        <th>Project Code</th>
                        
                        <th>Project Text</th>

                        <th>Action</th>

                    </tr>

                </thead>

            </table>

        </div>

        <script src="//code.jquery.com/jquery.js"></script>

        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>
        //this is the script dont change the #users-table
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('get.data') !!}',
                columns: [
                    { data: 'id', name: 'id', className: "datatablescenter" },
                    { data: 'project_name', name: 'project name', className: "datatablescenter" },
                    { data: 'project_code', name: 'project code', className: "datatablescenter" },
                    { data: 'project_text', name: 'project text', className: "datatablesjustify" }

                ]
            });
        });
        </script>

        @stack('scripts')

</body>
</html>

