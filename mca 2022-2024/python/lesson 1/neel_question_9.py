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

def correctParenthesis(a) :
    num1 = 0
    num2 = 0
    for i in [*a] :
        if i == '(' :
            num1 += 1
        if i == ')' :
            num2 += 1
    if num1 != num2:
       print('Sorry, there is an error in paranthesis') 
    else :
       print('The following thing is working')


repeatOrNot = input('START Y/STOP N')

while repeatOrNot.lower() == 'y' :
    stringValue = input('Please give a string')
    correctParenthesis(stringValue)
    repeatOrNot = input('START Y/STOP N')
    
