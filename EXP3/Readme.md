# Cryptographic Hashing and Secure Password Storage

## Aim
To understand hashing algorithms and implement secure password storage using hashing and salting.

---

## Theory
Passwords should never be stored in plain text. Hashing converts passwords into fixed-length values:
- MD5 (insecure, outdated)
- SHA-256 (more secure)

Salting adds randomness to hashes, making attacks harder.

---

## Methodology
1. Used Python/OpenSSL to generate hashes  
2. Hashed sample passwords using MD5 and SHA-256  
3. Added salt to passwords before hashing  
4. Compared hashed outputs  
5. Observed differences between salted and unsalted hashes  

---

## Results
- MD5 hashes were easy to crack  
- SHA-256 provided better security  
- Salting made hashes more secure  

---

## Discussion
Hashing is essential for password security. Salting improves protection against attacks like rainbow tables.

---

## Future Scope
- Use stronger algorithms like bcrypt  
- Implement secure authentication systems  
- Study password cracking techniques  

---

## Tools Used
- Python / OpenSSL  
