#include<iostream>
using namespace std;

int maxZeros(int N)
{
	int maxm = -1;			//largest block 'off' found
	int cnt = 0;				//counting blocks
  int pre = -1;				//separator status
  int curr ;					//current state evaluated
    
    pre = N & 1; 
    N >>= 1;
    
 
	while (N) {						      //stop in the end
		
	    curr = N & 1; 				  //current state evaluated

		if ( !(curr) && pre ) { 	//only count zeroes separated by 1
		  cnt++;
		}
		
		if( curr && cnt){ 			  //if found 1, and counter: end of a block
			maxm = max(maxm, cnt);	//save counter
			pre = curr;				      //prepare next
			cnt = 0 ;
		}
						    
		N >>= 1;					//next bit
	}
	return maxm;
}


// Driver code
int main()
{
	int N = 5; 
	cout << maxZeros(N) << endl;
	return 0;
}
