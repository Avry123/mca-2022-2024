#QUESTION 16


def operator(a,b,operator) :
    operator1 = operator
    a_type = type(a)
    b_type = type(b)
    answer = 0
    if (operator1 == '+' or operator1 == '-' or operator1 == '*' or operator1 == '/' or operator1 == '%') :
                     print('the operator is valid')
                     if (operator1 == '+') :
                         answer = a + b
                     if (operator1 == '-') :
                         answer = a - b 
                         if (answer < 0) :
                             raise ValueError('NegativeResultException')
                     if (operator1 == '*') :
                         answer = a * b
                     if (operator1 == '/') :
                         answer = a/b
                     if (operator1 == '%' ) :
                         answer = a % b
                     print(answer)
    else :
        raise ValueError('Invalid Operator Exception')
      
    


try :
    operator(5,6,'-')
except TypeError :
           raise TypeError('Illegal number of arguments')
