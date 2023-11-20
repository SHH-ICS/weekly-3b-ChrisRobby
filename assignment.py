
# calculate the HST 13%
def calcTax(s):
  return float(s) * 0.13

# initialize subtotal and topping count
subtotal = 0.0
toppings = 0

# get the size 
size = input("What size pizza? (large or extralarge): ")
if size == "large": 
  subtotal = subtotal + 6.00
elif size == "extralarge":
  subtotal = subtotal + 10.00
else:
  print("Invalid size")
  exit(0)

# get the topping count
toppings = int(input("How many toppings? (1-4): "))
if toppings == 1:
  subtotal = subtotal + 1.00
elif toppings == 2:
  subtotal = subtotal + 1.75
elif toppings == 3:
  subtotal = subtotal + 2.50
elif toppings == 4:
  subtotal = subtotal + 3.35
else:
  print("Invalid topping count")
  exit(0)

# calculate the tax and total fro mthe subtotal  
tax = calcTax(subtotal)
total = subtotal + tax

# print the order 
print("Order:")
print("One", size, "pizza with", toppings, "toppings:")
print("subtotal: $", subtotal)
print("     HST: $", tax)
print("   Total: $", total)


