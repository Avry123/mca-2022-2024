#Write a python class which has two methods get_string() and print_string().
#get_string() will return a string accepts a stroing from the user and print_string.
#print the string in uppercase.

class updateString :
    def __init__(self) :
        self.string = '' 
    
    #get_string() will give value to self.string
    def get_string(self, anime) :
        self.string = anime 
    
    #returns uppercase string
    def print_string(self) :
        return self.string.upper()

startOrStop = input("Start Y or Stop N")
while startOrStop.lower() == 'y' :
    anime = input("Enter anime's name : ")
    s1 = updateString()
    s1.get_string(anime)
    print(s1.print_string())
    startOrStop = input("Start Y or Stop N")