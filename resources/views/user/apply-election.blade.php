@extends('layout.main-layout')
@section('title', 'Election')
@section('content')
<div class="container">
    <h1>🗳️ Student Election Candidate Application</h1>
    
    <div class="introduction">
        <p>Thank you for your interest in becoming a candidate for the Student Council Elections! Please complete this form to register as a candidate. All fields marked with an asterisk (*) are required.</p>
        <p><strong>Application Deadline:</strong> May 5, 2025, 5:00 PM</p>
    </div>
    
    <form id="candidateForm">
        <div class="form-section">
            <h2>Personal Information</h2>
            
            <div class="input-group">
                <div class="form-group">
                    <label for="firstName" class="required">First Name</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                
                <div class="form-group">
                    <label for="lastName" class="required">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="studentId" class="required">Student ID Number</label>
                <input type="text" id="studentId" name="studentId" required>
            </div>
            
            <div class="input-group">
                <div class="form-group">
                    <label for="email" class="required">Email Address</label>
                    <input type="email" id="email" name="email" required>
                    <div class="note">Please use your school email address</div>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
            </div>
            
            <div class="input-group">
                <div class="form-group">
                    <label for="grade" class="required">Grade/Year Level</label>
                    <select id="grade" name="grade" required>
                        <option value="">Select your grade</option>
                        <option value="freshman">Freshman</option>
                        <option value="sophomore">Sophomore</option>
                        <option value="junior">Junior</option>
                        <option value="senior">Senior</option>
                        <option value="graduate">Graduate Student</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="major">Major/Department</label>
                    <input type="text" id="major" name="major">
                </div>
            </div>
        </div>
        
        <div class="form-section">
            <h2>Candidacy Information</h2>
            
            <div class="form-group">
                <label class="required">Position you are applying for:</label>
                <div class="radio-option">
                    <input type="radio" id="president" name="position" value="president" required>
                    <label for="president">President</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="vicePresident" name="position" value="vicePresident">
                    <label for="vicePresident">Vice President</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="secretary" name="position" value="secretary">
                    <label for="secretary">Secretary</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="treasurer" name="position" value="treasurer">
                    <label for="treasurer">Treasurer</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="classRep" name="position" value="classRep">
                    <label for="classRep">Class Representative</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="gpa" class="required">Current GPA</label>
                <input type="number" id="gpa" name="gpa" min="0" max="4" step="0.01" required>
                <div class="note">Must have a minimum GPA of 2.5 to be eligible</div>
            </div>
            
            <div class="form-group">
                <label for="prevExperience">Previous Leadership Experience</label>
                <textarea id="prevExperience" name="prevExperience" placeholder="List any previous leadership roles, volunteer work, or relevant experiences..."></textarea>
            </div>
        </div>
        
        <div class="form-section">
            <h2>Campaign Information</h2>
            
            <div class="form-group">
                <label for="slogan">Campaign Slogan (optional)</label>
                <input type="text" id="slogan" name="slogan" placeholder="Your catchy campaign slogan">
            </div>
            
            <div class="form-group">
                <label for="platform" class="required">Campaign Platform</label>
                <textarea id="platform" name="platform" placeholder="Describe your key campaign promises and what you hope to accomplish if elected..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="campaignPlan">Campaign Plan (optional)</label>
                <textarea id="campaignPlan" name="campaignPlan" placeholder="Briefly describe how you plan to campaign..."></textarea>
            </div>
        </div>
        
        <div class="declaration">
            <div class="checkbox-option">
                <input type="checkbox" id="declaration" name="declaration" required>
                <label for="declaration" class="required">I certify that the information provided is true and accurate. I understand the responsibilities of the position I am applying for and commit to following the election rules and guidelines.</label>
            </div>
            
            <div class="checkbox-option">
                <input type="checkbox" id="timeCommitment" name="timeCommitment" required>
                <label for="timeCommitment" class="required">I understand the time commitment required for this position and confirm that I can fulfill these obligations.</label>
            </div>
        </div>
        
        <button type="submit" class="btn-submit">Submit Application</button>
    </form>
    
    <div class="form-footer">
        <p>For any questions regarding the application process, please contact the Election Committee at student.elections@school.edu</p>
    </div>
</div>

@endsection