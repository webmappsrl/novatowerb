describe('Login Nova_Tower_Babel', () => {

    it('Article Sabrina Fontanini', () => {
        cy.visit('/nova/login')
        cy.get('input[name=email]').type('sf@webmapp.it')
        cy.get('input[name=password]').type('webmapp2020')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')


        cy.get('#nova > div > div.min-h-screen.flex-none.pt-header.min-h-screen.w-sidebar.bg-grad-sidebar.px-6 > ul > li:nth-child(3) > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.card > div.relative > div.overflow-hidden.overflow-x-auto.relative > table > tbody > tr > td.td-fit.text-right.pr-6.align-middle > div > span:nth-child(2) > a > svg').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.mb-8 > div > div:nth-child(6) > div.py-6.px-8.w-1\\/2 > div.flex.items-center > select').select('Spanish')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.mb-8 > div > div.flex.border-b.border-40.remove-bottom-border > div.py-6.px-8.w-1\\/2 > div.flex.items-center > select').select('Russian')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.flex.items-center > button:nth-child(3) > span\n').click();

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(6) > div.w-3\\/4.py-4.break-words > a').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n      Italian\n    ')

        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(7) > div.w-3\\/4.py-4.break-words > a').each(($e, index, $list) => {
            const text = $e.text()
                expect(text).to.eq('\n      Spanish\n    ')

        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(8) > div.w-3\\/4.py-4.break-words > a').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n      Russian\n    ')

        })

        cy.get('#nova > div > div.min-h-screen.flex-none.pt-header.min-h-screen.w-sidebar.bg-grad-sidebar.px-6 > ul > li:nth-child(1) > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.flex > div.w-full.flex.items-center.mb-6 > div.flex-no-shrink.ml-auto > a').click()

        cy.get('input#translations_title_fr').type('Titre français')
        cy.get('input#translations_body_fr').type('cduincdnscndsn')
        cy.get('input#translations_title_es').type('ESpa')
        cy.get('input#translations_body_es').type('cduincdnscndsn')
        cy.get('input#translations_title_ru').type('Russian')
        cy.get('input#translations_body_ru').type('ddddchdwbcbwbcbw')
        cy.get('select.form-control.form-select.w-full').select('Sabrina Fontanini')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.flex.items-center > button:nth-child(3) > span').click()


        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Titre français\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        cduincdnscndsn\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(4) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        ESpa\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(5) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        cduincdnscndsn\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(6) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Russian\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(7) > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        ddddchdwbcbwbcbw\n      ')
        })


        cy.get('span.text-90').click()
        cy.get('#logout > a').click()
    })


})
