#include <stdio.h>
#include "isOdd.h"
#include "isEven.h"

int main() {
    int number;
    printf("Enter a number: ");
    scanf("%d", &number);

    if (isOdd(number)) {
        printf("%d is odd.\n", number);
    } else {
        printf("%d is even.\n", number);
    }

    return 0;
}
