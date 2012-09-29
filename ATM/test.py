a = 10 #Withdrawal amount

b = 120 #balance

if a%5 == 0:
	if a < b :
		b = b - a - 0.50
		print "Successful Transaction"
	else :
		print "Insufficient Funds"
else:
	print " Incorrect Withdrawal Amount (not multiple of 5)"

print b

