/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>
#include <stdlib.h>

int sum(int a, int b) {
    return a + b;
}

int main()
{
   int num1;
   int num2;
   int a;
   printf("Give your number 1 ");
   
   scanf("%d", &num1);
   
   printf("Give your number 2 ");
   
   scanf("%d", &num2);
   
   if (sum(num1,num2) >= 80) {
       printf("The sum is greater than 80");
   } else {
       for (int i = 0; i <= sum(num1,num2); i++ ) {
           printf("%d\n", i);
       }
   }
}
  
