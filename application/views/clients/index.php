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
                <li class="active">Pelanggan</li>
            </ul>
            <ul class="buttons">
                <li>
                    <a href="#" class="link_bcPopupList">
                    <span class="icon-user"></span><span class="text">Pelanggan Anda</span></a>
                    <div id="bcPopupList" class="popup">
                        <div class="head clearfix">
                            <div class="arrow"></div>
                            <span class="isw-users"></span>
                            <span class="name">Pelanggan Anda</span>
                        </div>
                        <div class="body-fluid users">

                            <div class="item clearfix">
                                <div class="image"><a href="#"><img src="/assets/aquarius/img/users/aqvatarius_s.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Leads</a>                                    
                                    <span>5</span>
                                </div>
                            </div>

                            <div class="item clearfix">
                                <div class="image">
                                    <a href="#"><img src="/assets/aquarius/img/users/no-image50.jpg" width="32"/></a>
                                </div>
                                <div class="info">
                                    <a href="#" class="name">Prospects</a>                                
                                    <span>2</span>
                                </div>
                            </div>                        

                            <div class="item clearfix">
                                <div class="image">
                                    <a href="#"><img src="/assets/aquarius/img/users/no-image50.jpg" width="32"/></a>
                                </div>
                                <div class="info">
                                    <a href="#" class="name">Survey</a>  
                                    <span>11</span>
                                </div>
                            </div>                              
                        
                            <div class="item clearfix">
                                <div class="image">
                                    <a href="#"><img src="/assets/aquarius/img/users/no-image50.jpg" width="32"/></a>
                                </div>
                                <div class="info">
                                    <a href="#" class="name">Install</a>                                    
                                    <span>122</span>
                                </div>
                            </div>
                            <div class="item clearfix">
                                <div class="image">
                                    <a href="#"><img src="/assets/aquarius/img/users/no-image50.jpg" width="32"/></a>
                                </div>
                                <div class="info">
                                    <a href="#" class="name">Disconnect</a>
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                        </div>
                    </div>
                </li>                
            </ul>
        </div>
        
        <div class="workplace">
            <div class="row-fluid">
                <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Pelanggan</h1>
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
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
                            <!--
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
                                <?php foreach($clients as $client){?>
                                <tr>
                                    <td><?php echo $client->name;?></td>
                                    <td><?php echo $client->alias;?></td>
                                    <td><?php echo $client->am;?></td>
                                    <td><?php echo $client->address;?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-small dropdown-toggle" >Aksi 
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li class="submenuheader"><a><?php echo $client->name;?></a></li>
                                                <li class="btneditclient pointer"><a>Edit</a></li>
                                                <li class="btnviewsites pointer" ><a>Lihat Cabang</a></li>
                                                <li class="divider survey_save"></li>
                                                <li class="btnsurvey"><a href="#">Survey</a></li>
                                                <li class="divider survey_save"></li>
                                                <li class="btnsetpadibranch"><a href="#">Set TS Cabang Yang Menangani</a></li>
                                                <li ><a>Pemindahan AM</a></li>
                                                <li class="amhistory"><a>AM History</a></li>
                                            </ul>
                                        </div>                                        
                                    </td>                                    
                                </tr>
                                <?php }?>
                            </tbody>
                            -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="dr"><span></span></div>
        </div>
    </div>
    <script type="text/javascript">
        (function($){
        /*$.ajax({
            url:'clients/get',
            type:'get',
            dataType:"json"
        })
        .done(function(res){
            console.log(res);
            $.each(res.data,function(a,b){
                console.log(b);
            });
        })
        .fail(function(err){
            console.log("Err",err);
        });*/

        if($.fn.dataTable.isDataTable("#tSortable")){
            $("#tSortable").dataTable().destroy();
        }
        $("#tSortable").dataTable({
            ajax:'/clients/get',
            /*
            "aoColumns": [
                { "sWidth": "95px", "sClass": "unupdatable" ,"fieldName":"no"},
                { "sWidth": "95px", "sClass": "unupdatable text-center" ,"fieldName":"tanggal"},
                { "sWidth": "95px", "sClass": "unupdatable text-left" ,"fieldName":"keterangan"},
                { "sWidth": "95px", "sClass": "unupdatable text-right" ,"fieldName":"jumlah"},
                { "sWidth": "95px", "sClass": "unupdatable text-center" ,"fieldName":"rekening"},
                { "sWidth": "95px", "sClass": "unupdatable text-center" ,"fieldName":"realisasi"},         
            ],
            */
        })

        }(jQuery))
    </script>
</body>
</html>
