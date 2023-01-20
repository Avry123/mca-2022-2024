#17 Define a class which contains method 'Display Color' which takes one character as argument.
#Raise error if the character is not a alphabet is a color of the rainbow display the color name, if it is any other alphabet report error.

import string

class NotLetterException(Exception) :
    pass

class ColorException(Exception) :
    pass

class Color :
    def __init__(self,color) :
        self.color = color[0:1].upper()
        self.rainbow = ['Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Indigo', 'Violet']
        self.rainbowInitial = ['R', 'O', 'Y', 'G', 'B', 'I', 'V']
    def checkColor(self) :
       #First we will check if the argument given to us is letter or not
        if (self.color in string.ascii_letters) :
            #Checking if the color exists in the list of rainbow color
            if (self.color in self.rainbowInitial) :
                #Giving the color of the initial letter
                for index , i in enumerate(self.rainbowInitial) :
                    if (self.color == i) :
                        # self.index will store the index value
                        self.index = index
                print(self.rainbow[self.index])
            else :
                raise ColorException('The color does not exists in the rainbow')
        else :
            raise NotLetterException('please give letters')
    

#color = Color('g')
#color.checkColor()

repeatOrNot = input('start Y/stop N')

while repeatOrNot.lower() == 'y' :
    character = input('Give me a character ')
    color = Color(character)
    color.checkColor()
    
    
