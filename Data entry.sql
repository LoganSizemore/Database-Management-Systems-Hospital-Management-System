-- create project data
use HealthCare;

-- Insert data into Patient table
INSERT INTO Patient(PatientID, FirstName, LastName, Address, ssn, PhoneNumber, insurance, PharmacyID, Admitted, Released) 
VALUE(1, 'Donald', 'Duck', '13 Quack St.', 123456789, 6155551234, 0, NULL, '1934-06-09 10:00:00', '1934-06-09 13:00:00');

INSERT INTO Patient(PatientID, FirstName, LastName, Address, ssn, PhoneNumber, insurance, PharmacyID, Admitted, Released) 
VALUE(2, 'John', 'Doe', '1600 Pennsylvania Avenue NW', 987654321, 6155554321, 1, NULL, current_timestamp(), NULL);

INSERT INTO Patient(PatientID, FirstName, LastName, Address, ssn, PhoneNumber, insurance, PharmacyID, Admitted, Released) 
VALUE(3, 'Jane', 'Doe', '1600 Pennsylvania Avenue NW', 123098456, 6155554321, 1, NULL, current_timestamp(), NULL);

INSERT INTO Patient(PatientID, FirstName, LastName, Address, ssn, PhoneNumber, insurance, PharmacyID, Admitted, Released) 
VALUE(4, 'Bugs', 'Bunny', '1 Hole in ground', 000000002, 6155550001, 0, NULL, current_timestamp(), NULL);

INSERT INTO Patient(PatientID, FirstName, LastName, Address, ssn, PhoneNumber, insurance, PharmacyID, Admitted, Released) 
VALUE(5, 'Mickey', 'Mouse', '1 Mickey Mouse Ln', 000000001, 6155551111, 0, NULL, current_timestamp()-100, current_timestamp());

-- Insert into Pharmacy
INSERT INTO Pharmacy(PharmacyID, PharmacyName, PharmacyAddress, PharmacyPhoneNumber) 
VALUE(1, 'Hospital Pharmacy','11 Double Trouble Rd' , 6155556666);

INSERT INTO Pharmacy(PharmacyID, PharmacyName, PharmacyAddress, PharmacyPhoneNumber) 
VALUE(2, 'Local Pharmacy','100 Chicken Dinner Road' , 6155551111);

-- Insert into Hospital
INSERT INTO Hospital(HospitalID, HospitalName, HospitalAddress, HospitalPhoneNumber, State, ZipCode)
VALUE(1, 'Hospital', '1 Medical Way', 6155550911, 'TN', '37132');

-- Insert into Department
INSERT INTO Department(DepartmentID, HospitalID, DepartmentName)
VALUE(1, 1, 'ER');

INSERT INTO Department(DepartmentID, HospitalID, DepartmentName)
VALUE(2, 1, 'Pediatric');

INSERT INTO Department(DepartmentID, HospitalID, DepartmentName)
VALUE(3, 1, 'Radiology');

-- Insert into Staff
INSERT INTO Staff(StaffID, FirstName, LastName, ssn, Address, DepartmentID, PhoneNumber)
VALUE(1, 'Hygeia', 'Asclepius', NULL, '1 Medical Way', 1, 6155550911);

INSERT INTO Staff(StaffID, FirstName, LastName, ssn, Address, DepartmentID, PhoneNumber)
VALUE(2, 'Abraham', 'Jacobi', NULL, '1 Medical Way', 2, 6155550911);

INSERT INTO Staff(StaffID, FirstName, LastName, ssn, Address, DepartmentID, PhoneNumber)
VALUE(3, 'Marie', 'Curie', NULL, '1 Medical Way', 3, 6155550911);

-- Insert into Room
INSERT INTO Room(RoomID, PatientID, StaffID, AdmissionDate)
VALUE(1, 1, 1, '1934-06-09');

INSERT INTO Room(RoomID, PatientID, StaffID, AdmissionDate)
VALUE(2, 2, 1, current_date());

INSERT INTO Room(RoomID, PatientID, StaffID, AdmissionDate)
VALUE(3, 3, 2, current_date());

INSERT INTO Room(RoomID, PatientID, StaffID, AdmissionDate)
VALUE(4, 4, 3, current_date());

INSERT INTO Room(RoomID, PatientID, StaffID, AdmissionDate)
VALUE(5, 5, 3, current_date());

-- Insert into Prescription
INSERT INTO Prescription(PrescriptionID, MedicationName, PrescriptionDate, PatientID, PrescriptionCost)
VALUE(1, 'Aspirin', '1934-06-09', 1, 500.00);

-- Insert into Doctor
INSERT INTO Doctor(DoctorID, FirstName, LastName, ssn, DepartmentID, PhoneNumber)
VALUE(1, 'Elmer', 'Fudd', NULL, 2, 6155550911);

INSERT INTO Doctor(DoctorID, FirstName, LastName, ssn, DepartmentID, PhoneNumber)
VALUE(2, 'Steven', 'Strange', NULL, 1, 6155550911);

-- Insert into Appointment
INSERT INTO Appointment(AppointmentID, PatientID, DoctorID, Date, Time)
VALUE(1, 4, 1, current_date(), current_time());

INSERT INTO Appointment(AppointmentID, PatientID, DoctorID, Date, Time)
SELECT 2, p.patientID, 1, DATE(p.Admitted), TIME(p.Admitted)
FROM Patient p where p.patientID = 1;

-- Insert into Invoice
INSERT INTO Invoice(InvoiceID, PatientID, ServiceDescription, Cost, total)
VALUE(1, 1, 'Broken beak', 1000.00, 1000.00);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    