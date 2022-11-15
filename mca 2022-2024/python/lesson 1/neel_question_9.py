# a string with paranthesis() is well bracketed if all paranthesis are matched is every opening bracket has matching closing bracket and vice versa.
#Write a python program having function wellbrackered(s) that takes string a containing parenthesis and return true if s is well bracketed else false
# bracketed else false.

# Hint: Keep track of nesting depth of bracket. Initially the depth is 0.depth is 0.
#The depth increases with each opening bracket and decreases with each closing bracket.wHAT ARE THE CONSTRAINTS on the value of nesting depth to the wellbracket?

# example: wellbracket("20"))
# false

# wellbracketed"(a+b)(a+b)"
# true

# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.

# If you find ( add num1 by 1
# If you find ) add num2 by 1
# Then compare num1 and num2 , if num1 and num2 are equal then the next step happens
# If num2 gets incremented before num1, then turn parenthisisError to true, if parenthisisError is true then there is an error.

def correctParenthesis(a) :
    num1 = 0
    num2 = 0
    parenthisisError = 'false' 
    for i in [*a] :
        if i == '(' :
            num1 += 1
            # print('This is num1 ', num1 , '\n')
        if i == ')' :
            num2 += 1
            # print('This is num2 ', num2 , '\n')
            if (num2 > num1) :
                parenthisisError =  'true'
    if num1 != num2:
       print('Sorry, there is an error in paranthesis') 
    else :
           if (parenthisisError == 'true') :
               print('There is an error')
           else :
                print('This Works')
       


repeatOrNot = input('START Y/STOP N')

while repeatOrNot.lower() == 'y' :
    stringValue = input('Please give a string')
    correctParenthesis(stringValue)
    repeatOrNot = input('START Y/STOP N')
    
