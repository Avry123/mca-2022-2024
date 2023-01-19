class illegalNumber(Exception) :
    pass 

class invalidOperator(Exception) :
    pass 

class negativeResult(Exception) :
    pass 

operator1 = ['+', '-', '*', '/', '%']

try : 
    startOrStop = input('Start Y or Stop N')
    while startOrStop.lower() == 'y' :
        num1 = int(input('Number 1'))
        num2 = int(input('Number 2'))
        operator = input('Operator')
        if (num1 is not None and num2 is not None and operator is not None) :
            if (operator not in operator1) :
                if (operator == '+') :
                    print(num1 + num2)
                if (operator == '-') :
                    if (num1 - num2 < 0) : 
                        raise negativeResult('The result is coming as negative')
                    else :
                        print(num1 - num2)
                if (operator == '*') :
                    print(num1 * num2) 
                if (operator == '/') :
                    print(num1 / num2)
                if (operator == '%') :
                    print(num1 % num2)
            else :
                raise invalidOperator("We don not support this operator")
        else :
            raise illegalNumber('You have not entered all the values.')
    startOrStop = input('Start Y or Stop N')
except Exception as e :
    print(e)