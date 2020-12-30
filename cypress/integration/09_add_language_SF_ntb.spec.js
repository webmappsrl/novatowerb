describe('Add Language SF', () => {

    it('Add Language SF', () => {
        cy.visit('/nova/login')
        cy.get('input[name=email]').type('sf@webmapp.it')
        cy.get('input[name=password]').type('webmapp2020')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')

        cy.contains('Sabrina Fontanini').click()
        cy.contains('setting Sabrina Fontanini').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div:nth-child(2) > div > div.flex.items-center.mb-3 > div > a\n').click()
        cy.get('#name').clear()
        cy.get('#name').type('SF')

        cy.get('#email').clear()
        cy.get('#email').type('sf@gmail.com')

        cy.get('#password').type('webmapp2021')

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.flex.items-center > button:nth-child(3) > span').click()

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div:nth-child(2) > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        SF\n      ')
        })

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div:nth-child(2) > div > div.card.mb-6.py-3.px-6 > div.flex.border-b.border-40.-mx-6.px-6.remove-bottom-border > div.w-3\\/4.py-4.break-words > p\n').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        sf@gmail.com\n      ')
        })


        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div:nth-child(3) > div > div > div > div.card > div.relative > div.overflow-hidden.overflow-x-auto.relative > table > tbody > tr:nth-child(1) > td.td-fit.text-right.pr-6.align-middle > div > button > svg').click()
      cy.get('#confirm-delete-button').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div:nth-child(3) > div > div > div > div.flex > div.w-full.flex.items-center > div > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.card.overflow-hidden.mb-8 > div > div.py-6.px-8.w-1\\/2 > select').select('German')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.flex.items-center > button:nth-child(3) > span').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div:nth-child(3) > div > div > div > div.flex > div.w-full.flex.items-center > div > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.card.overflow-hidden.mb-8 > div > div.py-6.px-8.w-1\\/2 > select').select('Russian')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.flex.items-center > button:nth-child(3) > span').click()
        cy.get('#nova > div > div.min-h-screen.flex-none.pt-header.min-h-screen.w-sidebar.bg-grad-sidebar.px-6 > ul > li > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.card > div.relative > div.overflow-hidden.overflow-x-auto.relative > table > tbody > tr:nth-child(1) > td:nth-child(2) > div > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.flex.select-none.pt-4 > div > a.ml-3.cursor-pointer.font-bold.text-80.text-sm.text-primary.border-b-2.border-primary').should('contain', 'English')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.flex.select-none.pt-4 > div > a:nth-child(2)').should('contain', 'French')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.flex.select-none.pt-4 > div > a:nth-child(3)').should('contain', 'German')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.flex.select-none.pt-4 > div > a:nth-child(4)').should('contain', 'Russian')
        cy.get('span.text-90').click()
        cy.get('#logout > a').click()
        cy.get('input[name=email]').type('sf@gmail.com')
        cy.get('input[name=password]').type('webmapp2021')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')
        cy.get('span.text-90').click()
        cy.get('#logout > a').click()

    })


})
