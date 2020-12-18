describe('Login Nova_Tower_Babel', () => {

    it('Login Sabrina Fontanini', () => {
        cy.visit('/nova/login')
        cy.get('input[name=email]').type('sf@webmapp.it')
        cy.get('input[name=password]').type('webmapp2020')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')

        cy.get('span.text-90').click()
        cy.get('#logout > a').click()


    })

    it('Login Margherita', () => {
        cy.visit('/nova/login')
        cy.get('input[name=email]').type('mm@webmapp.it')
        cy.get('input[name=password]').type('webmapp2020')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')

        cy.get('span.text-90').click()
        cy.get('#logout > a').click()

    })



})
