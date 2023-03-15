<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="all.css">
    <style>
        #t{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="nn">
        <div class="row" style="background-color: black;">
            <div class="navbar">
                <div class="logo">
                    <h1>SRSDC</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="home.html" target="_self">HOME</a></li>
                        
                        <li><a href="home.php" target="_self" class="log" style="background-color: lime; color: black; border-radius: 10px; padding: 5px 20px;">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="n">
        <h3 style="text-align: center; margin-top: 30px;"><u>DETAILS</u> :</h3>
        <div class="row"> 
            <div class="col-md-6">
                    <label>Project Title :</label>
                    <input class="form-control" type="text" id="ntitle">
                        <div class="col mt-2" id="tex">
                            <label class="mt-3">Group Of Memebers : </label>
                            <input type="text" class="form-control tx mt-2" id="ngm" placeholder="Team members">  
                        </div>
                    
                    <label class="mt-3">Under the Guidance of : </label>
                    <input class="form-control" type="text" id="nguide">
                    <label class="mt-3">Subtitle : </label>
                    <textarea class="form-control" name="" id="nsub" rows="5" placeholder="DEPARTMENT OF CSE RGUKT,IIIT SKLM"></textarea>
                    <label class="mt-3">Abstract : </label>
                    <textarea class="form-control" name="" id="nab" rows="5" placeholder="THEME OF YOUR PROJECT"></textarea>
            </div>

            <div class="col-md-6">
                <h3>Table of content :</h3>
                <div class="row">
                    <div class="col-8"><label for=""><b>INTRODUCTON :</b></label></div>
                    <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn1" placeholder="01 - 10"></div>
                </div>
                    
                    <div class="row"><label for="">Purpose</label>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Scope </label></div>   
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Project Overview</label></div>   
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Project Objectives</label></div>
                    </div>

                    <div class="row">
                        <div class="col-8 mt-2"><label for=""><b>SYSTEM ANALYSIS :</b></label></div>
                        <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn2" placeholder="01 - 10"></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Introduction :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Existing Analysis :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Proposed System :</label></div>
                    </div>

                    <div class="row">
                        <div class="col-8 mt-2"><label for=""><b>FEASIBILITY STUDY :</b></label></div>
                        <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn3" placeholder="01 - 10"></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Technical Feasibilty :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Economic Feasibilty :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Opeartional Feasibilty :</label></div>
                    </div>

                    <div class="row">
                        <div class="col-8 mt-2"><label for=""><b>SYSTEM REQUIREMENT SPECIFICATION :</b></label></div>
                        <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn4" placeholder="01 - 10"></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Hardware Configuration :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Software Configuration :</label></div>
                    </div>

                    <div class="row">
                        <div class="col-8 mt-2"><label for=""><b>SYSTEM DESIGN :</b></label></div>
                        <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn5" placeholder="01 - 10"></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Application overview :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Data Flow Diagram :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">UML Diagrams :</label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-8 mt-2"><label for=""><b>SYSTEM IMPLEMENTATION AND TESTING :</b></label></div>
                        <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn6" placeholder="01 - 10"></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">System Implementation :</label></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">System Testing :</label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-8 mt-2"><label for=""><b>CONCLUSION :</b></label></div>
                        <div class="col-4"><input style="width: 60px; height: 20px;" type="text" id="nn7" placeholder="01 - 10"></div>
                    </div>
                    <div class="row">
                        <div class="col-8"><label for="">Conclusion :</label></div>
                    </div>
            </div>
        </div>


        <div class="row">
                <h5 class="pt-2">Introduction : </h5>
                <h6 class="pt-2"><u>Purpose :</u></h6>
               <div class="form-group mt-2" id="exp" >
                <textarea name="" class="form-control first" rows="3" id="np"></textarea>
                <button class="btn btn-primary mt-2" id="starta" onclick="newt()">ADD +</button>
               </div>
        </div>

                    <h6 class="pt-2"><u>Scope :</u></h6>
                    <textarea name="" id="nscope" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Project  Overview :</u></h6>
                    <textarea name="" id="nprojectoverview" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Project Objectives :</u></h6>
                    <textarea name="" id="nprojectobjectives" class="form-control" rows="3"></textarea>

                 <div class="row">
                        <h5 class="pt-2">System Analysis : </h5>
                        <h6 class="pt-2"><u>Introduction :</u></h6>
                       <div class="form-group mt-2" id="exp2" >
                        <textarea name="" class="form-control sec" rows="3" id="nsa"></textarea>
                       </div>
                </div>
                    <h6 class="pt-2"><u>Existing System :</u></h6>
                    <textarea name="" id="nes" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Proposed System :</u></h6>
                    <textarea name="" id="nps" class="form-control" rows="3"></textarea>
                
                    <h5 class="pt-2">Feasibilty Study : </h5>
                    <h6 class="pt-2"><u>Technical Feasibilty :</u></h6>
                    <textarea name="" id="ntf" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Economical Feasibilty :</u></h6>
                    <textarea name="" id="nef" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Opeartional Feasibilty :</u></h6>
                    <textarea name="" id="nof" class="form-control" rows="3"></textarea>

                    <h5 class="pt-2">System Requirement Specification : </h5>
                    <h6 class="pt-2"><u>Hardware Configuration :</u></h6>
                    <textarea name="" id="nhc" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Software Configuration :</u></h6>
                    <textarea name="" id="nsc" class="form-control" rows="3"></textarea>

                    <h5 class="pt-2">System Design : </h5>
                    <h6 class="pt-2"><u>Application Overview :</u></h6>
                    <textarea name="" id="nao" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>Data Flow Diagrams :</u></h6>


                    <div class="container">
                    <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
                    <p id="num-of-files">No Files Chosen</p>
                    </div>
                    
                    <h6 class="pt-2"><u>UML Diagrams :</u></h6>


                    <div class="container">
                        <input type="file" id="file-input1" accept="image/png, image/jpeg" onchange="preview1()" multiple>
                        <p id="num-of-files1">No Files Chosen</p>
                    </div>
                    

                    <h5 class="pt-2">System Implementation and Testing : </h5>
                    <h6 class="pt-2"><u>System Implementation :</u></h6>
                    <textarea name="" id="nsi" class="form-control" rows="3"></textarea>
                    <h6 class="pt-2"><u>System Testing :</u></h6>
                    <textarea name="" id="nst" class="form-control" rows="3"></textarea>
                    
                    <h5 class="pt-2">Conclusion : </h5>
                    <h6 class="pt-2"><u>Conclusion :</u></h6>
                    <textarea name="" id="no" class="form-control" rows="3"></textarea>

                    <button class="btn btn-primary btn-lg m-5"onclick="pagepgg()">page check</button>

    </div>

    <div class="container" id="t">
        <h1 class="text-center" id="ttitle" style="margin: 400px 0px;">SRSDC</h1>
        <div class="row"><h6 class="text-center">Under the Guidance of :</h6></div>
        <div class="row"><h5 class="text-center" id="tguide">Y.Ramesh</h5></div>
        <div class="row">
            <b><div class="offset-11 col-1" id="tgm"></div></b>
        </div>

        <div class="row"><h2 class="text-center" style="margin-top: 100px;">Table of the content : </h2>
            <div class="col-10"><b>INTRODUCTON : </b></div>
            <div class="col-2" id="tn1">1-35</div>
            <div class="row">Purpose</div>
            <div class="row">Scope</div>
            <div class="row">Project Overview</div>
            <div class="row">Project Objectives</div>

            <div class="col-10 mt-2"><b>SYSTEM ANALYSIS : </b></div>
            <div class="col-2" id="tn2">1-35</div>
            <div class="row">Introduction</div>
            <div class="row">Existing Analysis </div>
            <div class="row">Proposed System</div>
            
            <div class="col-10 mt-2"><b>FEASIBILITY STUDY : </b></div>
            <div class="col-2" id="tn3">1-35</div>
            <div class="row">Technical Feasibilty</div>
            <div class="row">Economical Feasibilty</div>
            <div class="row">Opeartional Feasibilty</div>
            
            <div class="col-10 mt-2"><b>SYSTEM REQUIREMENT SPECIFICATION : </b></div>
            <div class="col-2" id="tn4">1-35</div>
            <div class="row">Hardware Configuration</div>
            <div class="row">Software Configuration</div>
            
            <div class="col-10 mt-2"><b>SYSTEM DESIGN : </b></div>
            <div class="col-2" id="tn5">1-35</div>
            <div class="row">Application Overview</div>
            <div class="row">Data Flow Diagram</div>
            <div class="row">UML Diagrams</div>

            <div class="col-10 mt-2"><b>SYSTEM IMPLEMENTATION AND TESTING : </b></div>
            <div class="col-2" id="tn6">1-35</div>
            <div class="row">System Implementation</div>
            <div class="row">System Testing</div>
            
            <div class="col-10 mt-2"><b>CONCLUSION : </b></div>
            <div class="col-2" id="tn7">1-35</div>
            <div class="row">Conclusion</div>
            
        </div>

        <div>
            <h2 class="text-center" style="margin-top: 400px;">Subtitle</h2>
            <div class="row">
            <div class="col-6 offset-3" style="text-align:justify;"><b id="tsub"></b></div>
        </div>

        <div>
            <h2 class="text-center" style="margin-top: 500px;">Abstract</h2>
            <div class="row">
            <div class="col" id="tab" style="text-align: justify;"></div>
        </div>
        </div>

        <h2 class="text-center" style="margin-top: 700px;">INTRODUCTION</h2>
        <div class="row"><b><u>Purpose</u> : </b></div>
        <div class="row" id="tp"><ul style="list-style-type: none;">
            <li></li><li></li>
        </ul></div>

        <div class="row mt-5"><b><u>Scope</u> : </b></div>
        <div class="row" id="tscope" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Project Overview</u> : </b></div>
        <div class="row" id="tprojectoverview" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Project Objectives</u> : </b></div>
        <div class="row" id="tprojectobjectives" style="text-align:justify;"></div>



        <h2 class="text-center">SYSTEM ANALYSIS</h2>
        <div class="row mt-5"><b><u>Introduction : </u> : </b></div>
        <div class="row" id="tsa" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Existing System</u> : </b></div>
        <div class="row" id="tes" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Proposed System</u> : </b></div>
        <div class="row" id="tps" style="text-align:justify;"></div>

        <h2 class="text-center">FEASIBILITY STUDY : </h2>
        <div class="row mt-5"><b><u>Technical Feasibilty</u> : </b></div>
        <div class="row" id="ttf" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Economical Feasibilty</u> : </b></div>
        <div class="row" id="tef" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Opeartional Feasibilty</u> : </b></div>
        <div class="row" id="tof" style="text-align:justify;"></div>

        <h2 class="text-center">SYSTEM REQUIREMENT SPECIFICATION : </h2>
        <div class="row mt-5"><b><u>Hardware Configuration</u> : </b></div>
        <div class="row" id="thc" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Software Configuration</u> : </b></div>
        <div class="row" id="tsc" style="text-align:justify;"></div>

        <h2 class="text-center">SYSTEM DESIGN : </h2>
        <div class="row mt-5"><b><u>Application Overview</u> : </b></div>
        <div class="row" id="tao" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>Data Flow Diagram & UML Diagrams</u> : </b></div>
        <div class="row" id="tdfd" style="align-items: center;"></div>
        <div class="row" id="tuml" style="text-align:justify;"></div>
        
        

        <h2 class="text-center">SYSTEM IMPLEMENTATION AND TESTING : </h2>
        <div class="row mt-5"><b><u>System Implementation</u> : </b></div>
        <div class="row" id="tsi" style="text-align:justify;"></div>
        <div class="row mt-5"><b><u>System Testing</u> : </b></div>
        <div class="row" id="tst" style="text-align:justify;"></div>
    

        <h2 class="text-center">CONCLUSION : </h2>
        <div class="row mt-5"><b><u>Conclusion</u> : </b></div>
        <div class="row" id="to" style="text-align:justify;"></div>


        <button class="btn btn-primary btn-lg m-5" id="van" onclick="pagepg()">Print</button>
    </div>

    <script src="starta.js"></script>
    <script>
        let fileInput = document.getElementById("file-input");
        let imageContainer = document.getElementById("tdfd");
        let numOfFiles = document.getElementById("num-of-files");

        function preview(){
            imageContainer.innerHTML = "";
            numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

            for(i of fileInput.files){
                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figCap = document.createElement("figcaption");
                figCap.innerText = i.name;
                figure.appendChild(figCap);
                reader.onload=()=>{
                let img = document.createElement("img");
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}

        let fileInput1 = document.getElementById("file-input1");
        let imageContainer1 = document.getElementById("tuml");
        let numOfFiles1 = document.getElementById("num-of-files1");

        function preview1(){
            imageContainer1.innerHTML = "";
            numOfFiles1.textContent = `${fileInput1.files.length} Files Selected`;

            for(i of fileInput1.files){
                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figCap = document.createElement("figcaption");
                figCap.innerText = i.name;
                figure.appendChild(figCap);
                reader.onload=()=>{
                let img = document.createElement("img");
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}
    </script>
</body>
</html>