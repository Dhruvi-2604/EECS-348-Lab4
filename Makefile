# Compiler and flags
CC = gcc
CFLAGS = -Wall -g

# Executable name
TARGET = main

# Object files
OBJS = main.o isOdd.o isEven.o

# Default target
all: $(TARGET)

# Link object files into the final executable
$(TARGET): $(OBJS)
	$(CC) -o $(TARGET) $(OBJS)

# Compile source files into object files
main.o: main.c isOdd.h isEven.h
	$(CC) $(CFLAGS) -c main.c

isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) -c isOdd.c

isEven.o: isEven.c isEven.h
	$(CC) $(CFLAGS) -c isEven.c

# Run the program
run: $(TARGET)
	./$(TARGET)

# Clean up build artifacts
clean:
	rm -f $(TARGET) $(OBJS)
