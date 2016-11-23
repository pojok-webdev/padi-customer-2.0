<!DOCTYPE html>
<html lang="en">
<head>        
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
                <li><a href="#">PadiApp</a> <span class="divider">></span></li>                
                <li class="active">Setting</li>
            </ul>
            <?php $this->load->view("common/status");?>
        </div>
        
        <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-documents"></div>
                        <h1>Text fields</h1>
                    </div>
                    <div class="block-fluid">                        
                        
                        <div class="row-form clearfix">
                            <div class="span3">Input type text:</div>
                            <div class="span9"><input type="text" value="some text value..."/></div>
                        </div> 

                        <div class="row-form clearfix">
                            <div class="span3">Input type password:</div>
                            <div class="span9"><input type="password" value="123123123"/></div>
                        </div>                         

                        <div class="row-form clearfix">
                            <div class="span3">Readonly input:</div>
                            <div class="span9"><input type="text" value="readonly input field..." readonly="readonly"/></div>                            
                        </div> 

                        <div class="row-form clearfix">
                            <div class="span3">Disabled input:</div>
                            <div class="span9"><input type="text" value="disabled input field..." disabled="disabled"/></div>
                        </div>                                       
                        
                        <div class="row-form clearfix">
                            <div class="span3">Placeholder:</div>
                            <div class="span9"><input type="text" placeholder="placeholder..."/></div>
                        </div>                                                               

                        <div class="row-form clearfix">
                            <div class="span3">Textarea field:</div>
                            <div class="span9"><textarea name="textarea">Some text in textarea field...</textarea></div>
                        </div>                        

                        <div class="row-form clearfix">
                            <div class="span3">Textarea placeholder:</div>
                            <div class="span9"><textarea name="textarea" placeholder="Textarea field placeholder..."></textarea></div>
                        </div>                                                
                        
                    </div>
                </div>
                
            </div>
            
            <div class="dr"><span></span></div>
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-favorite"></div>
                        <h1>WYSIWYG HTML Editor</h1>
                    </div>
                    <div class="block-fluid" id="wysiwyg_container">
                        
                        <textarea id="wysiwyg" name="text" style="height: 300px;"></textarea>
                        
                    </div>
                </div>
                
            </div>            
            
            <div class="dr"><span></span></div>
            
            <div class="row-fluid">
                
                <div class="span6">
                    <div class="head clearfix">
                        <div class="isw-list"></div>
                        <h1>Select fields</h1>
                    </div>
                    <div class="block-fluid">                        
                        
                        <div class="row-form clearfix">
                            <div class="span5">Simple select:</div>
                            <div class="span7">
                                <select name="select">
                                        <option value="0">choose a option...</option>
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>   
                                </select>
                            </div>
                        </div>                                            

                        <div class="row-form clearfix">
                            <div class="span5">Multiple select:</div>
                            <div class="span7">
                                <select name="select" multiple="multiple">                                    
                                        <option value="0">choose a option...</option>
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>                                    
                                </select>
                            </div>
                        </div>                         
                        
                        <div class="row-form clearfix">
                            <div class="span5">Simple Select2:</div>
                            <div class="span7">
                                <select name="select" id="s2_1" style="width: 100%;">
                                    <option value="0">choose a option...</option>
                                    <optgroup label="Some group #1">
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                    </optgroup>
                                    <optgroup label="Some group #1">
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                    </optgroup>
                                    <optgroup label="Some group #3">
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>                                    
                                    </optgroup>                                 
                                </select>
                            </div>
                        </div>           
                        
                        <div class="row-form clearfix">
                            <div class="span5">Multiple Select2:</div>
                            <div class="span7">                                
                                <select name="select" id="s2_2" style="width: 100%;" multiple="multiple">
                                    <option value="0">choose a option...</option>
                                    <optgroup label="Some group #1">
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                    </optgroup>
                                    <optgroup label="Some group #1">
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                    </optgroup>
                                    <optgroup label="Some group #3">
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>                                    
                                    </optgroup>                                  
                                </select>
                            </div>
                        </div> 
                        
                    </div>
                </div>

                <div class="span6">
                    <div class="head clearfix">
                        <div class="isw-target"></div>
                        <h1>Checkbox, radio and file fields</h1>
                    </div>
                    <div class="block-fluid">                        
                        
                        <div class="row-form clearfix">
                            <div class="span5">Checkbox:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox1"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox2" checked="checked"/> checked
                                </label>
                            </div>
                        </div> 
                        <div class="row-form clearfix">
                            <div class="span5">Disabled checkbox:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox1" disabled="disabled"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox2" disabled="disabled" checked="checked"/> checked
                                </label>
                            </div>
                        </div>                          
                        
                        <div class="row-form clearfix">
                            <div class="span5">Radio button:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="radio" name="radio1"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="radio" name="radio1" checked="checked"/> checked
                                </label>
                            </div>
                        </div>                         
                        <div class="row-form clearfix">
                            <div class="span5">Disabled radio:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="radio" name="radio2" disabled="disabled"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="radio" name="radio2" disabled="disabled" checked="checked"/> checked
                                </label>
                            </div>
                        </div>                                 
                        
                        <div class="row-form clearfix">
                            <div class="span5">Input file:</div>
                            <div class="span7">                                                                
                                <input type="file" name="file"/>
                            </div>
                        </div> 
                        
                    </div>
                </div>                
                
            </div>
            
            <div class="dr"><span></span></div>            
            
            <div class="row-fluid">
                
                <div class="span6">
                    <div class="head clearfix">
                        <div class="isw-cloud"></div>
                        <h1>Masked inputs</h1>
                    </div>
                    <div class="block-fluid">                        

                        <div class="row-form clearfix">
                            <div class="span3">Date:</div>
                            <div class="span9"><input type="text" id="mask_date"/> <span>Example: 04/10/2012</span></div>
                        </div>                         
                        
                        <div class="row-form clearfix">
                            <div class="span3">Phone number:</div>
                            <div class="span9"><input type="text" id="mask_phone"/> <span>Example: 98 (765) 432-10-98</span></div>
                        </div>                                   

                        <div class="row-form clearfix">
                            <div class="span3">Credit card number:</div>
                            <div class="span9"><input type="text" id="mask_credit"/> <span>Example: 9876-5432-1098-7654</span></div>
                        </div>                                                           

                        <div class="row-form clearfix">
                            <div class="span3">TIN:</div>
                            <div class="span9"><input type="text" id="mask_tin"/> <span>Example: 98-7654321</span></div>
                        </div>                         

                        <div class="row-form clearfix">
                            <div class="span3">SSN:</div>
                            <div class="span9"><input type="text" id="mask_ssn"/> <span>Example: 987-65-4321</span></div>
                        </div>                                                 
                        
                    </div>
                </div>
                
                <div class="span6">
                    <div class="head clearfix">
                        <div class="isw-ok"></div>
                        <h1>Form validation</h1>
                    </div>
                    <div class="block-fluid">                        
                        <form id="validation" method="POST" action="submit.action">
                            
                        <div class="row-form clearfix">
                            <div class="span3">Date:</div>
                            <div class="span9"><input value="" class="validate[required,custom[date]]" type="text" name="date" id="date"/> <span>Example: 2010-12-01</span></div>
                        </div>                         

                        <div class="row-form clearfix">
                            <div class="span3">E-mail:</div>
                            <div class="span9"><input value="" class="validate[required,custom[email]]" type="text" name="email" id="email" />  <span>Example: someone@nowhere.com</span></div>
                        </div>                                                                                 

                        <div class="row-form clearfix">
                            <div class="span3">Required:</div>
                            <div class="span9">        
                                <select name="sport" id="sport" class="validate[required]" id="sport">
                                    <option value="">Choose a sport</option>
                                    <option value="option1">Tennis</option>
                                    <option value="option2">Football</option>
                                    <option value="option3">Golf</option>
                                </select>
                                <span>Required select field</span>
                            </div>                            
                        </div>                                                                                 
                            
                        <div class="row-form clearfix">
                            <div class="span3">User name:</div>
                            <div class="span9">        
                                <input value="" class="validate[required,maxSize[5]]" type="text" name="user" id="user"/>
                                <span>Maximum 5 characters</span>
                            </div>
                        </div>      
                            
                        <div class="row-form clearfix">
                            <div class="span3">Passowrd:</div>
                            <div class="span9">        
                                <input value="" class="validate[required,minSize[5]]" type="password" name="password" id="password"/>
                                <span>Minimum 5 characters</span>
                            </div>
                        </div>                                  
                            
                        </form>
                    </div>
                                                    
                </div>
                                
            </div>
            
            <div class="dr"><span></span></div>
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Fields grid</h1>
                    </div>
                    <div class="block-fluid">                        

                        <div class="row-form clearfix">
                            <div class="span4"><input type="text" value="span4"/></div>
                            <div class="span4"><input type="text" value="span4"/></div>
                            <div class="span4"><input type="text" value="span4"/></div>                            
                        </div>                                                               
                        
                        <div class="row-form clearfix">
                            <div class="span5"><input type="text" value="span5"/></div>
                            <div class="span5"><input type="text" value="span5"/></div>
                            <div class="span2"><input type="text" value="span2"/></div>                            
                        </div>                                                                             

                        <div class="row-form clearfix">
                            <div class="span6"><input type="text" value="span6"/></div>
                            <div class="span6"><input type="text" value="span6"/></div>                            
                        </div>                                                                                       
                        
                        <div class="row-form clearfix">
                            <div class="span9"><input type="text" value="span9"/></div>
                            <div class="span3"><input type="text" value="span3"/></div>                            
                        </div>                                                                             

                        <div class="row-form clearfix">
                            <div class="span10"><input type="text" value="span10"/></div>                            
                            <div class="span2"><input type="text" value="span2"/></div>                                                        
                        </div>                                                                                                     
                        
                        <div class="row-form clearfix">
                            <div class="span12"><input type="text" value="span12"/></div>                            
                        </div>                                                                             
                        
                    </div>
                </div>
                
            </div>            
            
            <div class="dr"><span></span></div>
        
        </div>
        
    </div>   
    
</body>
</html>
