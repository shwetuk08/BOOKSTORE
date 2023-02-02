
<!DOCTYPE html>

<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
   require_once('header.php');
   ?>

    <head>
    <link rel="stylesheet" type="text/css" href="Suspense.css">  

    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">          
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
<title>
Suspense Books
    </title>
<body>




<div class="container">
<h1>
<br>
Suspenseful Stories
</h1>
        <section class="suspense">
        

<!--colums of images with data-->
            <div class="column">
                <img src="suspens\the girl in room 105.jpg" class="modal-open hover-shadow preview" data-modal="modal1" alt="The locked room"></img>
                <p class="suspense_title">The girl in Room 105</p> 
                <p>Author Name: Chetan Bhagat</p>
                <a href="./suspens/the girl in room 105.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>

            </div>

            <div class="column">
                <img src="suspens\before i go to sleep.jpg" class="modal-open hover-shadow preview" data-modal="modal2" alt="Classic horror stories"></img>
                <p class="suspense_title">Before I go to sleep</p> 
                <p>Author Name: S.J.Watson</p>
                <a href="./suspens/Before I Go To Sleep_ A Novel ( PDFDrive ).pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>


            </div>
            
            <div class="column">
                <img src="suspens\Gone-girl.jpg" class="modal-open hover-shadow preview" data-modal="modal3" alt="that frequent visitor"></img>
                    <p class="suspense_title">Gone Girl</p>
                    <p>Author Name: Gillian Flynn</p>
                    <a href="./suspens/Gone-Girl-by-Gillian-Flynn V2.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                    </a>


            </div>
          
            <div class="column">
                <img src="suspens\and there were none v2.jpg" class="modal-open hover-shadow preview" data-modal="modal4" alt="Demon 4 God Squad 00"></img>
                    <p class="suspense_title">And then there were none</p>
                    <p>Author Name: Agatha Christie</p>
                    <a href="./suspens/And Then There Were None V2.pdf"><button>Download
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
            <img src="suspens\the girl in room 105.jpg"></img>
            <p class="modal_para">The Girl in Room 105 is the eighth novel and the tenth book overall written by the Indian author Chetan Bhagat. The book became a bestseller based on prearranged sales alone.</p><br>
            <p class="modal_para">Hi, I’m Keshav, and my life is screwed. I hate my job and my girlfriend left me. Ah, the beautiful Zara. Zara is from Kashmir. She is a Muslim. And did I tell you my family is a bit, well, traditional? Anyway, leave that.</p>
            <p class="modal_para">Zara and I broke up four years ago. She moved on in life. I didn’t. I drank every night to forget her. I called, messaged, and stalked her on social media. She just ignored me.</p>
            <p class="modal_para">However, that night, on the eve of her birthday, Zara messaged me. She called me over, like old times, to her hostel room 105. I shouldn’t have gone, but I did… and my life changed forever.</p><br>
            <p class="modal_para">This is not a love story. It is an unlove story.</p>


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
            <img src="suspens\before i go to sleep.jpg"></img>
            <p class="modal_para">Before I Go to Sleep is the first novel by S. J. Watson published in Spring 2011. It became both a Sunday Times and The New York Times bestseller and has been translated into over 40 languages. The novel is a psychological thriller about a woman suffering from anterograde amnesia.</p>
            <p class="modal_para">Christine wakes up every morning in an unfamiliar bed with an unfamiliar man. She looks in the mirror and sees an unfamiliar, middle-aged face. And every morning, the man she has woken up with must explain that he is Ben, he is her husband, she is forty-seven years old, and a terrible accident two decades earlier decimated her ability to form new memories.</p>
            <p class="modal_para">Every day, Christine must begin again the reconstruction of her past. And the closer she gets to the truth, the more unbelievable it seems.</p>
            
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
            <img src="suspens\Gone-girl.jpg"></img>
            <p class="modal_para">Gone Girl is a 2012 crime thriller novel by American writer Gillian Flynn. It was published by Crown Publishing Group in June 2012. The novel was popular and made the New York Times Best Seller list.</p><br>
            <p class="modal_para">Who are you?<br>
What have we done to each other?
These are the questions Nick Dunne finds himself asking on the morning of his fifth wedding anniversary when his wife Amy suddenly disappears. The police suspect Nick. Amy's friends reveal that she was afraid of him, that she kept secrets from him. He swears it isn't true. A police examination of his computer shows strange searches. He says they weren't made by him. And then there are the persistent calls on his mobile phone.
</p>
            <p class="modal_para">
So what did happen to Nick's beautiful wife?<br>
The sense of suspense in the novel comes from whether Nick Dunne is responsible for the disappearance of his wife Amy.
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
            <img src="suspens\and there were none v2.jpg"></img>
            <p class="modal_para">And Then There Were None is a mystery novel by the English writer Agatha Christie, described by her as the most difficult of her books to write. It was first published in the United Kingdom by the Collins Crime Club on 6 November 1939, as Ten Little Niggers, after the children's counting rhyme and minstrel song, which serves as a major plot element.</p>
            <p class="modal_para">First, there were ten—a curious assortment of strangers summoned as weekend guests to a little private island off the coast of Devon. Their host, an eccentric millionaire unknown to all of them, is nowhere to be found. All that the guests have in common is a wicked past they're unwilling to reveal—and a secret that will seal their fate. For each has been marked for murder. A famous nursery rhyme is framed and hung in every room of the mansion:</p>
            <p class="modal_para">"Ten little boys went out to dine; One choked his little self and then there were nine. Nine little boys sat up very late; One overslept himself and then there were eight. Eight little boys traveling in Devon; One said he'd stay there then there were seven. Seven little boys chopping up sticks; One chopped himself in half and then there were six. Six little boys playing with a hive; A bumblebee stung one and then there were five. Five little boys going in for law; One got in Chancery and then there were four. Four little boys going out to sea; A red herring swallowed one and then there were three. Three little boys walking in the zoo; A big bear hugged one and then there were two. Two little boys sitting in the sun; One got frizzled up and then there was one. One little boy left all alone; He went out and hanged himself and then there were none."</p>
            <p class="modal_para">When they realize that murders are occurring as described in the rhyme, terror mounts. One by one they fall prey. Before the weekend is out, there will be none. Who has choreographed this dastardly scheme? And who will be left to tell the tale? Only the dead are above suspicion.</p>

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
    