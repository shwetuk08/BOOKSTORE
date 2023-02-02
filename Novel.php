
<!DOCTYPE html>

<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
   require_once('header.php');
   ?>

    <head>
    <link rel="stylesheet" type="text/css" href="novel.css"> 


    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">          
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
<title>Novel</title>

<body>
  
<div class="container">
<h1><br><br>Novels
</h1>
        <section class="novels">

<!--colums of images with data-->
            <div class="column">
                <img src="Classic Novels\1984 cover v2.jpg" class="modal-open hover-shadow preview" data-modal="modal1" alt="1984"></img>
                <p class="novel_title">1984</p> 
                <p>Author Name: Gorge Orwell</p>
                <a href="./Classic Novels/1984.pdf"><button>Download
                    <i class="fa fa-download"></i></button>
                </a>
                
            </div>

            <div class="column">
                <img src="Classic Novels\lord of rings.jpg" class="modal-open hover-shadow preview" data-modal="modal2" alt="lord of rings"></img>
                    <p class="novel_title">Lord of the Rings</p>
                    <p>Author Name: J.R.R. Tolkien</p>
                    <a href="./Classic Novels/Tolkien-J.-The-lord-of-the-rings-HarperCollins-ebooks-2010.pdf"><button>Download
                <i class="fa fa-download"></i></button>
                </a>
            </div>
            
            <div class="column">
                <img src="Classic Novels\harry potter.jpeg" class="modal-open hover-shadow preview" data-modal="modal3" alt="Harry potter"></img>
                    <p class="novel_title">Harry Potter </p>
                    <p>Author Name: J.K.Rowling</p>
                    <a href="./Classic Novels/Harry potter novel.pdf"><button>Download
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
            <img src="Classic Novels\1984 cover v2.jpg"></img>
            <p>Nineteen Eighty-Four (also stylised as 1984) is a dystopian social science fiction novel and cautionary tale written by the English writer George Orwell. It was published on 8 June 1949 by Secker & Warburg as Orwell's ninth and final book completed in his lifetime. Thematically, it centres on the consequences of totalitarianism, mass surveillance and repressive regimentation of people and behaviours within society. Orwell, a democratic socialist, modelled the authoritarian state in the novel on Stalinist Russia and Nazi Germany. More broadly, the novel examines the role of truth and facts within societies and the ways in which they can be manipulated.</p>
            <p>The story takes place in an imagined future in the year 1984, when much of the world is in perpetual war. Great Britain, now known as Airstrip One, has become a province of the totalitarian superstate Oceania, which is led by Big Brother, a dictatorial leader supported by an intense cult of personality manufactured by the Party's Thought Police. Through the Ministry of Truth, the Party engages in omnipresent government surveillance, historical negationism, and constant propaganda to persecute individuality and independent thinking.</p>
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
            <img src="Classic Novels\lord of rings.jpg"></img>
            <p>The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, intended to be Earth at some time in the distant past, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.
                The title refers to the story's main antagonist, the Dark Lord Sauron, who, in an earlier age, created the One Ring to rule the other Rings of Power given to Men, Dwarves, and Elves, in his campaign to conquer all of Middle-earth. From homely beginnings in the Shire, a hobbit land reminiscent of the English countryside, the story ranges across Middle-earth, following the quest to destroy the One Ring mainly through the eyes of the hobbits Frodo, Sam, Merry and Pippin.</p>
            <p>Although often called a trilogy, the work was intended by Tolkien to be one volume of a two-volume set along with The Silmarillion. For economic reasons, The Lord of the Rings was published over the course of a year from 29 July 1954 to 20 October 1955 in three volumes titled The Fellowship of the Ring, The Two Towers, and The Return of the King. The work is divided internally into six books, two per volume, with several appendices of background material. Some later editions print the entire work in a single volume, following the author's original intent.</p>    
            <p>Tolkien's work, after an initially mixed reception by the literary establishment, has been the subject of extensive analysis of its themes and origins. Influences on this earlier work, and on the story of The Lord of the Rings, include philology, mythology, Christianity, earlier fantasy works, and his own experiences in the First World War.
            The Lord of the Rings has since been reprinted many times and translated into at least 38 languages. Its enduring popularity has led to numerous references in popular culture, the founding of many societies by fans of Tolkien's works, and the publication of many books about Tolkien and his works. It has inspired many derivative works, including paintings, music, films, television, video games, and board games. It has helped to create and shape the modern fantasy genre, within which it is considered one of the greatest books of all time.</p>
            <p>Award-winning adaptations of The Lord of the Rings have been made for radio, theatre, and film. It has been named Britain's best-loved novel of all time in the BBC's 2003 poll The Big Read.</p>
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
            <img src="Classic Novels\harry potter.jpeg"></img>
            <p>Harry Potter and the Philosopher's Stone is a 1997 fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school and with the help of his friends, Ron Weasley and Hermione Granger, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry's parents, but failed to kill Harry when he was just 15 months old.</p>
            <p>The book was first published in the United Kingdom on 26 June 1997 by Bloomsbury. It was published in the United States the following year by Scholastic Corporation under the title Harry Potter and the Sorcerer's Stone. It won most of the British book awards that were judged by children and other awards in the US. The book reached the top of the New York Times list of best-selling fiction in August 1999 and stayed near the top of that list for much of 1999 and 2000. It has been translated into at least 73 other languages and has been made into a feature-length film of the same name, as have all six of its sequels. The novel has sold in excess of 120 million copies, making it the third best-selling novel of all time.</p>
            <p>Most reviews were very favourable, commenting on Rowling's imagination, humour, simple, direct style and clever plot construction, although a few complained that the final chapters seemed rushed. The writing has been compared to that of Jane Austen, one of Rowling's favourite authors; Roald Dahl, whose works dominated children's stories before the appearance of Harry Potter; and the ancient Greek story-teller Homer. While some commentators thought the book looked backwards to Victorian and Edwardian boarding school stories, others thought it placed the genre firmly in the modern world by featuring contemporary ethical and social issues, as well as overcoming obstacles like bullies.</p>            
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
    