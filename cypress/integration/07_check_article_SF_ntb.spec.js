describe('Login Nova_Tower_Babel', () => {

    it('Article Sabrina Fontanini', () => {
        cy.visit('/nova/login')
        cy.get('input[name=email]').type('sf@webmapp.it')
        cy.get('input[name=password]').type('webmapp2020')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')

        cy.contains('Articles').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.card > div.relative > div.overflow-hidden.overflow-x-auto.relative > table > tbody > tr > td:nth-child(5) > div > span > span > a').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Sabrina Fontanini\n      ')

        })

        cy.get('span.text-90').click()
        cy.get('#logout > a').click()
    })


})
