<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .text-center{
            text-align:center;
        }
    </style>
    <?php $this->load->view("common/head");?>
</head>
<body>
    <?php $this->load->view("common/header");?>    
    <div class="menu">                
    <?php $this->load->view("common/menu");?>        
    </div>
    <div class="content">
        <div class="breadLine">
            <ul class="breadcrumb">
                <li><a href="/">PadiApp</a> <span class="divider">></span></li>     
                <li class="active">Install</li>
            </ul>
            <?php $this->load->view("common/status");?>
        </div>
        
        <div class="workplace">
            <div class="row-fluid">
                <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Install</h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>                                                        
                            <li><a href="#" class="isw-attachment"></a></li>
                            <li>
                                <a href="#" class="isw-settings"></a>
                                <ul class="dd-list">
                                    <li><a href="#"><span class="isw-plus"></span> New document</a></li>
                                    <li><a href="#"><span class="isw-edit"></span> Edit</a></li>
                                    <li><a href="#"><span class="isw-delete"></span> Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th class="text-center">Alias</th>
                                    <th width="10%" class="text-center">AM</th>
                                    <th class="text-center">Alamat</th>
                                    <th width="10%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($installs as $install){?>
                                    <tr>
                                        <td><?php echo $install->name;?></td>
                                        <td><?php echo $install->alias;?></td>
                                        <td><?php echo humanize($lead->am);?></td>
                                        <td><?php echo $install->address;?></td>
                                        <td><div class="btn-group pull-right">                                        
                                        <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Survey</a></li>
                                            <li><a href="#">Install</a></li>
                                            <li><a href="#">Add Ticket</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Edit</a></li>
                                        </ul>
                                    </div></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="dr"><span></span></div>
        </div>
    </div>
    <script type="text/javascript">
        (function($){
        $("#tSortable1").DataTable().destroy();
        if($.fn.DataTable.isDataTable("#tSortable")){
            $("#tSortable").DataTable().destroy();
        }
        $("#tSortable1").DataTable({
            "ajax":
                {
                    "url":'/clients/get',
                    "type":'POST'
                },
            
            "aoColumns": [
                { "sWidth": "95px", "sClass": "unupdatable" ,"fieldName":"Nama"},
                { "sWidth": "95px", "sClass": "unupdatable text-center" ,"fieldName":"Alias"},
                { "sWidth": "95px", "sClass": "unupdatable text-left" ,"fieldName":"AM"},
                { "sWidth": "95px", "sClass": "unupdatable text-right" ,"fieldName":"Alamat"},
                { "sWidth": "95px", "sClass": "unupdatable text-center" ,"fieldName":"Aksi"},
            ],
            
        })

        }(jQuery))
    </script>
</body>
</html>
