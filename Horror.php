
<!DOCTYPE html>

<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
   require_once('header.php');
   ?>

    <head>
    <link rel="stylesheet" type="text/css" href="Horror.css">  


    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">          
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
<title>
Horror Books
    </title>

   
  
<body>


<div class="container">
<h1>
<br>
Horror Books
</h1>
        <section class="horror">
        

<!--colums of images with data-->
            <div class="column">
                <img src="Horror\the locked room.jpg" class="modal-open hover-shadow preview" data-modal="modal1" alt="The locked room"></img>
                <p class="horror_title">The Locked Room</p> 
                <p>Author Name: M.R.James</p>
                <a href="./Horror/The locked room.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>

            </div>

            <div class="column">
                <img src="Horror\Demon god.jpg" class="modal-open hover-shadow preview" data-modal="modal2" alt="Demon 4 God Squad 00"></img>
                    <p class="horror_title">Demon 4 God Squad 0</p>
                    <p>Author Name: David Dawn</p>
                    <a href="./Horror/Demon 4 God squad 0.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>

            </div>
            
            <div class="column">
                <img src="Horror\that frequent visitor.jpg" class="modal-open hover-shadow preview" data-modal="modal3" alt="that frequent visitor"></img>
                    <p class="horror_title">That Frequent Visitor</p>
                    <p>Author Name: Hari Kumar</p>
                    <a href="./Horror/That frequent visitor.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>
            </div>
          
            <div class="column">
                <img src="Horror\classic horror story.jpg" class="modal-open hover-shadow preview" data-modal="modal4" alt="Classic horror stories"></img>
                <p class="horror_title">Life Without Conflict</p> 
                <p>Author Name: H.P.Lovecraft</p>
                <a href="./Horror/Classic horror stories.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>

            </div>

            
           
<!--modals start-->

<!--modal 1-->
<div class="modal" id="modal1">
    <div class="modal-content">
        <div class="modal-header">
            <i class="fa fa-close" id="modal-close"></i>
            </i>
        </div>

        <div class="modal-body">
            <img src="Horror\the locked room.jpg"></img>
<p class="modal_para">A tree full of enormous spiders; curtains like a dead man's hair; a man with no eyes and a boy with no heart. These are some of the things in these stories by M.R. James, one of the greatest horror writers of all time. </p>
<p class="modal_para">"Penguin Readers" is a series of simplified novels, film novelizations and original titles that introduce students at all levels to the pleasures of reading in English. Originally designed for teaching English as a foreign language, the series' combination of high interest level and low reading age makes it suitable for both English-speaking teenagers with limited reading skills and students of English as a second language. Many titles in the series also provide access to the pre-20th century literature strands of the National Curriculum English Orders. "Penguin Readers" are graded at seven levels of difficulty, from "Easystarts" with a 200-word vocabulary, to Level 6 (Advanced) with a 3000-word vocabulary. </p>

        </div>
        <div class="modal-footer">
            <button id="modal-close">Close</button>
        </div>
    </div>    
</div>
   
<!--modal 2-->

<div class="modal" id="modal2">
    <div class="modal-content">
        <div class="modal-header">
           <i class="fa fa-close" id="modal-close"></i>
        
        </div>

        <div class="modal-body">
            <img src="Horror\Demon god.jpg"></img>
            
            <p class="modal_para">Demon: Four. God Squad: Nil. Is a supernatural horror novel revolving around an extreme game show broadcast on the internet which pits a Catholic priest against a supposedly real demon. And the priest who takes on the unenviable task of being its fifth contestant.</p> 
        </div>
    <div class="modal-footer">
            <button id="modal-close">Close</button>
        </div>
    </div>    
</div>

<!--modal 3-->
<div class="modal" id="modal3">
    <div class="modal-content">
        <div class="modal-header">
            <i class="fa fa-close" id="modal-close"></i>
                    </div>

        <div class="modal-body">
            <img src="Horror\that frequent visitor.jpg"></img>
            <p class="modal_para"> Why are outsiders not allowed on Vypeen Island after sunset?<br/>
What brought Richard Baxter from Calcutta to Kochi in 1948?<br/>
Where did Baxter and his wife disappear on the night of Pournami?<br/>
Who is the visitor that the fishermen fear so much? <br/>
How far will one man go for the woman he loves?<br/>
</p>
            <p class="modal_para">Six decades later, Shiuli Dutta is mysteriously lured into the dreaded Clifford Mansion, where she encounters the ghost of Richard Baxter.</p>
            <p class="modal_para">The grieving ghost tells her an incomplete story of its life.
A story that will reveal the darker side of a mans mind.
A story that shall unveil a venomous truth of the past.
A story so sinsiter that it shall alter the fate of a nations future.
A story of courage and cowardice, of deceit and insanity.
The story of that Frequent Visitor.

</p>

            </div>
        <div class="modal-footer">
            <button id="modal-close">Close</button>
        </div>
    </div>    
</div>

<!--modal 4 -->
<div class="modal" id="modal4">
    <div class="modal-content">
        <div class="modal-header">
            <i class="fa fa-close" id="modal-close"></i>
            </i>
        </div>

        <div class="modal-body">
            <img src="Horror\classic horror story.jpg"></img>
            <p class="modal_para">'Loathsomeness waits and dreams in the deep, and decay spreads over the tottering cities of men. A time will come - but I must not and cannot think!'
H. P. Lovecraft (1890-1937) was a reclusive scribbler of horror stories for the American pulp magazines that specialized in Gothic and science fiction in the interwar years. He often published in Weird Tales and has since become the key figure in the slippery genre of 'weird fiction'. Lovecraft developed an extraordinary vision of feeble men driven to the edge of sanity by glimpses of malign beings that have survived from human prehistory or by malevolent extra-terrestrial visitations. The ornate language of his stories builds towards grotesque moments of revelation, quite unlike any other writer.
</p>
            <p class="modal_para">This new selection brings together nine of his classic tales, focusing on the 'Cthulhu Mythos', a cycle of stories that develops the mythology of the Old Ones, the monstrous creatures who predate human life on earth. It includes the Introduction from Lovecraft's critical essay, 'Supernatural Horror in Literature', in which he gave his own important definition of 'weird fiction'. In a fascinating contextual introduction, Roger Luckhurst gives Lovecraft the attention he deserves as a writer who used pulp fiction to explore a remarkable philosophy that shockingly dethrones the mastery of man.</p>

        </div>
        <div class="modal-footer">
            <button id="modal-close">Close</button>
        </div>
    </div>    
</div>
   

</section>
</div>
<script src="modal.js"></script> 

</body>
</html>
    