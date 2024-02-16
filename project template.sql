-- Create a database to use if one does not already exist
CREATE DATABASE IF NOT EXISTS HealthCare;

-- Tell the program which database to use to ensure to correct one is being worked on
USE HealthCare;

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Patient (
	PatientID int PRIMARY KEY,
    FirstName varchar(50) not null,
    LastName varchar(50) not null,
    Address varchar(255),
    ssn char(9),
    PhoneNumber int,
	insurance bool,
    PharmacyID int,
    Admitted datetime,
    Released datetime
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Pharmacy (
	PharmacyID int PRIMARY KEY,
	PharmacyName varchar(50) NOT NULL,
	PharmacyAddress varchar(50),
	PharmacyPhoneNumber int
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Hosptial (
	HospitalID int PRIMARY KEY,
    HospitalName varchar(50) NOT NULL,
    HospitalAddress varchar(50),
    HospitalPhoneNumber int,
    State varchar(2),
    ZipCode varchar(5)
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Department (
	DepartmentID int PRIMARY KEY,
    HospitalID int NOT NULL,
    DepartmentName varchar(50) NOT NULL
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Staff (
	StaffID int PRIMARY KEY,
    FirstName varchar(50) NOT NULL,
    LastName varchar(50) NOT NULL,
    ssn char(9),
    Address varchar(255),
    DepartmentID int NOT NULL,
    PhoneNumber int
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Room (
	RoomID int PRIMARY KEY,
    PatientID int,
    StaffID int,
    AdmissionDate date
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Prescription (
	PrescriptionID int PRIMARY KEY,
    MedicationName varchar(100) NOT NULL,
    PrescriptionDate datetime,
    PatientID int NOT NULL,
    PrescriptionCost decimal NOT NULL
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Doctor (
	DoctorID int PRIMARY KEY,
    FirstName varchar(50) NOT NULL,
    LastName varchar(50) NOT NULL,
    ssn char(9),
    DepartmentID int NOT NULL,
    PhoneNumber int
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Appointment (
	AppointmentID int PRIMARY KEY,
    PatientID int NOT NULL,
    DoctorID int NOT NULL, 
    Date date NOT NULL,
    Time time NOT NULL
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Invoice (
	InvoiceID int PRIMARY KEY,
    PatientID int NOT NULL,
    ServiceDescription varchar(255) NOT NULL,
    Cost decimal NOT NULL,
    total decimal NOT NULL
);

-- Add the Foreign key contraints to each of the foreign key references
ALTER TABLE Patient ADD CONSTRAINT FOREIGN KEY (PharmacyID)  REFERENCES Pharmacy(PharmacyID);
ALTER TABLE Department ADD CONSTRAINT FOREIGN KEY (HospitalID)  REFERENCES Hosptial(HospitalID);
ALTER TABLE Staff ADD CONSTRAINT FOREIGN KEY (DepartmentID)  REFERENCES Department(DepartmentID);
ALTER TABLE Room ADD CONSTRAINT FOREIGN KEY (PatientID)  REFERENCES Patient(PatientID);
ALTER TABLE Room ADD CONSTRAINT FOREIGN KEY (StaffID)  REFERENCES Staff(StaffID);
ALTER TABLE Prescription ADD CONSTRAINT FOREIGN KEY (PatientID) REFERENCES Patient(PatientID);
ALTER TABLE Doctor ADD CONSTRAINT FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID);
ALTER TABLE Appointment ADD CONSTRAINT FOREIGN KEY (PatientID) REFERENCES Patient(PatientID);
ALTER TABLE Appointment ADD CONSTRAINT FOREIGN KEY (DoctorID) REFERENCES Doctor(DoctorID);
ALTER TABLE Invoice ADD CONSTRAINT FOREIGN KEY (PatientID) REFERENCES Patient(PatientID);

