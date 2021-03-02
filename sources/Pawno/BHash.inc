/*
Legal:
	Version: MPL 1.1
	
	The contents of this file are subject to the Mozilla Public License Version 
	1.1 the "License"; you may not use this file except in compliance with 
	the License. You may obtain a copy of the License at 
	http://www.mozilla.org/MPL/
	
	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.
	
	The Original Code is the Pawn framework.
	
	The Initial Developer of the Original Code is Andrew Sebastian "SkuZZi".
	The full code of this include is Copyrighted C 2021
	by the original developer. All Rights Reserved.

Contributors:
	SkuZZi

Thanks:
	CrasH - idea to make this unbreakable system

*/

#if !defined _HASH_SKUZZI
	#define _HASH_SKUZZI
	
	#define hash_length		128

	static hash[hash_length + 1], temp;

	stock Hash(const input[]) {
		hash = "";
		for(new i; i < strlen(input); i++) {
			temp = input[i];
			while(temp) {
				strcat(hash, temp % 2 ? "1" : "0");
				temp /= 2;
			}
		}

		while(strlen(hash) < hash_length) strcat(hash, hash);

		return hash;
	}
#endif