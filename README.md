***classes***
Institution : attributes
    name ,states ,adress ,mail ,phone_number
ExamResult : attributes
    name ,number_of_people_received,categorie ,institution_id(foreign key)
***Routes that use***
Routes          ---------------------   methodes 
api/examresult  --------------------->  GET/PUT/POST/DELETE
api/institution --------------------->  GET/PUT/POST/DELETE               