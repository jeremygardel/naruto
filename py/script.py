#   Vars & Functions
# x = "awesome"
# def myfunc():
#   x = "fantastic"
#   print("Python is " + x)

# myfunc()
# print(x) # Prints here awesome
# print(type(x))  # Print Type of X (str)


#   Random Numbers

# import random
# print(random.randrange(1,50))


#   Strings are arrays...

a = "Hello, World!"
print(a[1])

b = "Hello, World!"
print(len(b))

#   Check string if not

txt = "The best things in life are free!"
if "saz" not in txt:
  print("No, 'saz' is NOT present.")
if "free" in txt:
  print("Yes, 'free' is present.")


#   Split
  a = "Hello, World!"
print(a.split(",")) # returns ['Hello', ' World!']

# Loop Lists
fruits = ["apple", "banana", "cherry", "kiwi", "mango"]

newlist = [x for x in fruits if "e" in x]

print(newlist)

fruity = ["apple", "banana", "cherry", "kiwi", "mango"]

# Expression  Adding Orange instead of Banana 
newlists = [x if x != "banana" else "orange" for x in fruits]  

print(newlists)


# Tuple convert to list

z = ("apple", "banana", "cherry")
k = list(z)
k.append("kaka")
z = tuple(k)
print(z)